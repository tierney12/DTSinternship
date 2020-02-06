<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\JobRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\JobStockRepository;
use App\Repositories\StockPricebandRepository;
use Illuminate\Http\Request;
use App\Models\Job;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\JobRepository;
use App\Repositories\DentistRepository;
use App\Repositories\DepartmentRepository;
use App\Repositories\RemakeReasonRepository;
use App\Repositories\JobLayoutRepository;
use App\Repositories\NominalCodeRepository;
use App\Repositories\LabSheetRepository;
use App\Repositories\CrownBridgeWorkRepository;
use App\Repositories\ProsWorkRepository;
use App\Repositories\JobWorkRepository;

class JobController extends AppBaseController
{
    /** @var  JobRepository */

    private $jobRepository;
    private $dentistRepository;
    private $departmentRepository;
    private $remakeReasonRepository;
    private $jobLayoutRepository;
    private $nominalCodeRepository;
    private $labSheetRepository;
    private $crownBridgeRepository;
    private $prosRepository;
    private $jobWorkRepository;
    private $stockPricebandRepository;
    private $jobStockRepository;
    

    public function __construct(JobRepository $jobRepo, DentistRepository $dentistRepo, DepartmentRepository $departmentRepo, RemakeReasonRepository $remakeReasonRepo,
                                JobLayoutRepository $jobLayoutRepo, NominalCodeRepository $nominalCodeRepo, LabSheetRepository $labSheetRepo, StockPricebandRepository $stockRepo,
                                CrownBridgeWorkRepository $cbRepo, ProsWorkRepository $prosRepo, JobWorkRepository $jobWorkRepo, JobStockRepository $jobStockRepo)
    {
        //data associated with the fields of the job model
        $this->jobRepository = $jobRepo;
        $this->dentistRepository = $dentistRepo;
        $this->departmentRepository = $departmentRepo;
        $this->remakeReasonRepository = $remakeReasonRepo;
        $this->jobLayoutRepository = $jobLayoutRepo;
        $this->nominalCodeRepository = $nominalCodeRepo;
        $this->labSheetRepository = $labSheetRepo;

        //data associated with the fields of the stock model
        $this->stockPricebandRepository = $stockRepo;

        //for creating other tables
        $this->crownBridgeRepository = $cbRepo;
        $this->prosRepository = $prosRepo;
        $this->jobWorkRepository = $jobWorkRepo;
        $this->jobStockRepository = $jobStockRepo;
    }

    /**
     * Display a listing of the Job.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->jobRepository->pushCriteria(new RequestCriteria($request));
        $jobs = $this->jobRepository->all();

        return view('admin.jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new Job.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        //Fields of the job model
        $dentists = $this->dentistRepository->all();
        $departments = $this->departmentRepository->all()->pluck('name', 'id');
        $remakeReasons = $this->remakeReasonRepository->all()->pluck('code', 'id');
        $nominalCodes = $this->nominalCodeRepository->all()->pluck('nominal_codes', 'id');
        $labSheets = $this->labSheetRepository->all()->pluck('name', 'id');
        $remakeOriginalRefs = $this->jobRepository->all()->pluck('job_no', 'id');
        $jobErrorRefs = $this->jobRepository->all()->pluck('job_no', 'id');


//        Fields of the stock model
//
       $stocks = $this->stockPricebandRepository->all();


        if ($request->ajax()) {
            return view('admin.jobs.form');
        }

        return view('admin.jobs.create', compact(
            'dentists',
            'departments',
            'remakeReasons',
            'nominalCodes',
            'labSheets',
            'jobReasons',
            'jobErrorRefs',
            'remakeOriginalRefs',
            'stocks'

//            //STOCK ENTRY POINT
//            'stockCodes',
//            'stockDescriptions'
        ));
    }

    /**
     * Store a newly created Job in storage.
     *
     * @param CreateJobRequest $request
     *
     * @return Response
     */
    public function store(JobRequest $request)
    {
        //create the job layout
        $layout = $this->jobLayoutRepository->create($request['layout']);

        //create the job
        $job_input = $request['jobs'];
        $job_input['job_layout_id'] = $layout->id;
        $job_input['invoiced'] = 0;
        $job_input['price_fixed'] = 0;

        if($job_input['remake'] == 0){
            $job_input['remake_original_ref'] = null;
            $job_input['remake_reason_id'] = null;
            $job_input['remake_date'] = null;
        }


        $job = $this->jobRepository->create($job_input);

        $job_id = $job->id;

        //create the work for the job

        $department = $job->department;

        $job_work['job_id'] = $job_id;

        if ($department->crown_bridge_work == 1) {
            $cb_work = $this->crownBridgeRepository->create($request['cb']);
            $job_work['crown_bridge_work_id'] = $cb_work->id;
        }

        if ($department->pros_work == 1) {
            $pros_work = $this->prosRepository->create($request['pros']);
            $job_work['pros_work_id'] = $pros_work->id;
        }


        $this->jobWorkRepository->create($job_work);

        //create the stocks for the work

        foreach ($request['stock'] as $stock) {

            //Feed the relevant data from the form into an array

            $stock_data['job_id'] = $job_id;
            $stock_data['stock_id'] = $stock['stock_id'];
            $stock_data['units'] = $stock['stock_units'];

            //create the row in the job_stock table

            $this->jobStockRepository->create($stock_data);

        }

        if ($request->ajax()) {
            $data = [
                'id'   => $job->id,

            ];

            return response()->json($data);
        }

        Flash::success('Job saved successfully.');

        return redirect(route('jobs.index'));
    }

    /**
     * Display the specified Job.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $job = $this->jobRepository->findWithoutFail($id);

        if (empty($job)) {
            Flash::error('Job not found');

            return redirect(route('jobs.index'));
        }

        return view('admin.jobs.show', compact('job'));
    }

    /**
     * Show the form for editing the specified Job.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $job = $this->jobRepository->findWithoutFail($id);

        $dentists = $this->dentistRepository->all();
        $departments = $this->departmentRepository->all()->pluck('name', 'id');
        $remakeReasons = $this->remakeReasonRepository->all()->pluck('code', 'id');
        $nominalCodes = $this->nominalCodeRepository->all()->pluck('nominal_codes', 'id');
        $labSheets = $this->labSheetRepository->all()->pluck('name', 'id');
        $remakeOriginalRefs = $this->jobRepository->all()->pluck('job_no', 'id');
        $jobErrorRefs = $this->jobRepository->all()->pluck('job_no', 'id');

        $stocks = $this->stockPricebandRepository->all();


//        $stock_items = $this->jobStockRepository->all()->where('job_id', $job->id); // ['3' => JobStock, '4' => JobStock], ... ] ... cursor perhaps? iterate over index with offset x,x+1,x+2,...
        $stock_items = \App\Models\JobStock::where('job_id', $job->id)->get(); // ['0' => JobStock, '1' => JobStock, ... ] can iterate over index 0,1,... (easier)
        $work = $this->jobWorkRepository->all()->where('job_id', $job->id)->first();
        $cb_work = \App\Models\CrownBridgeWork::where('id', $work->crown_bridge_work_id)->first();
        $pros_work = \App\Models\ProsWork::where('id', $work->pros_work_id)->first();


        if (empty($job)) {
            Flash::error('Job not found');

            return redirect(route('jobs.index'));
        }

        return view('admin.jobs.edit', compact(
            'job',
            'dentists',
            'departments',
            'remakeReasons',
            'nominalCodes',
            'labSheets',
            'jobErrorRefs',
            'remakeOriginalRefs',
            'stocks',
            'stock_items',
            'work',
            'cb_work',
            'pros_work'
        ));
    }

    /**
     * Update the specified Job in storage.
     *
     * @param  int              $id
     * @param UpdateJobRequest $request
     *
     * @return Response
     */
    public function update($id, JobRequest $request)
    {
        $job = $this->jobRepository->findWithoutFail($id);

        if (empty($job)) {
            Flash::error('Job not found');

            return redirect(route('jobs.index'));
        }

        $this->jobLayoutRepository->update($request['layout'], $job->job_layout_id);

        $job = $this->jobRepository->update($request['jobs'], $job->id);

        $job_work = $job->work;

        $department = $job->department;

        if ($department->crown_bridge_work == 1) {
            if(isset($job->work->crownBridgeWork)){
                $this->crownBridgeRepository->update($request['cb'], $job->work->crown_bridge_work_id);
            }
            else{
                $cb_work = $this->crownBridgeRepository->create($request['cb']);
                $job_work->crown_bridge_work_id = $cb_work->id;
            }
        }
        elseif(isset($job->work->crownBridgeWork)){
            $job->work->crownBridgeWork->delete();
            $job->work->crown_bridge_work_id = null;
        }

        if ($department->pros_work == 1) {
            if(isset($job->work->prosWork)){
                $this->prosRepository->update($request['pros'], $job->work->pros_work_id);
            }
            else{
                $pros_work = $this->crownBridgeRepository->create($request['pros']);
                $job_work->pros_work_id = $pros_work->id;
            }
        }
        elseif(isset($job->work->prosWork)){
            $job->work->prosBridgeWork->delete();
            $job->work->pros_work_id = null;
        }

        $job_work->save();

        foreach($job->stocks as $row){
            $row->delete();
        }

        foreach($request['stock'] as $stock) {

            //Feed the relevant data from the form into an array

            $stock_data['job_id'] = $job->id;
            $stock_data['stock_id'] = $stock['stock_id'];
            $stock_data['units'] = $stock['stock_units'];

            //create the row in the job_stock table

            $this->jobStockRepository->create($stock_data);

        }


        Flash::success('Job updated successfully.');

        return redirect(route('jobs.index'));
    }

    /**
     * Remove the specified Job from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $job = $this->jobRepository->findWithoutFail($id);

        if (empty($job)) {
            Flash::error('Job not found');

            return redirect(route('jobs.index'));
        }

        $this->jobRepository->delete($id);

        Flash::success('Job deleted successfully.');

        return redirect(route('jobs.index'));
    }

}
