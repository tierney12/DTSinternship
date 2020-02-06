<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\JobWorkRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\JobWork;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\JobWorkRepository;
use App\Repositories\JobRepository;
use App\Repositories\ProsWorkRepository;
use App\Repositories\CrownBridgeWorkRepository;

class JobWorkController extends AppBaseController
{
    /** @var  JobWorkRepository */

    private $jobWorkRepository;
    private $jobRepository;
    private $prosWorkRepository;
    private $cb_workRepository;

    public function __construct(JobWorkRepository $jobWorkRepo, JobRepository $jobRepo, ProsWorkRepository $prosWorkRepo, CrownBridgeWorkRepository $cb_workRepo)
    {
        $this->jobWorkRepository = $jobWorkRepo;
        $this->jobRepository = $jobRepo;
        $this->prosWorkRepository = $prosWorkRepo;
        $this->crownBridgeWorkRepository = $cb_workRepo;
    }

    /**
     * Display a listing of the JobWork.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->jobWorkRepository->pushCriteria(new RequestCriteria($request));
        $jobWorks = $this->jobWorkRepository->all();

        return view('admin.job_works.index', compact('jobWorks'));
    }

    /**
     * Show the form for creating a new JobWork.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $jobs = $this->jobRepository->all()->pluck('name', 'id');
        $prosWorks = $this->prosWorkRepository->all()->pluck('name', 'id');
        $cb_works = $this->crownBridgeWorkRepository->all()->pluck('name', 'id');

        if ($request->ajax()) {
            return view('admin.job_works.form');
        }

        return view('admin.job_works.create', compact(
            'jobs',
            'prosWorks',
            'crownBridgeWorks'));
    }

    /**
     * Store a newly created JobWork in storage.
     *
     * @param CreateJobWorkRequest $request
     *
     * @return Response
     */
    public function store(JobWorkRequest $request)
    {
        $input = $request->all();

        $jobWork = $this->jobWorkRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $jobWork->id,
                'name' => $jobWork->name,
            ];

            return response()->json($data);
        }

        Flash::success('Job Work saved successfully.');

        return redirect(route('job-works.index'));
    }

    /**
     * Display the specified JobWork.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jobWork = $this->jobWorkRepository->findWithoutFail($id);

        if (empty($jobWork)) {
            Flash::error('Job Work not found');

            return redirect(route('job-works.index'));
        }

        return view('admin.job_works.show', compact('jobWork'));
    }

    /**
     * Show the form for editing the specified JobWork.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jobWork = $this->jobWorkRepository->findWithoutFail($id);
        $jobs = $this->jobRepository->all()->pluck('name', 'id');
        $prosWorks = $this->prosWorkRepository->all()->pluck('name', 'id');
        $cb_works = $this->crownBridgeWorkRepository->all()->pluck('name', 'id');

        if (empty($jobWork)) {
            Flash::error('Job Work not found');

            return redirect(route('job-works.index'));
        }

        return view('admin.job_works.edit', compact(
            'jobWork',
            'jobs',
            'prosWorks',
            'crownBridgeWorks'));
    }

    /**
     * Update the specified JobWork in storage.
     *
     * @param  int              $id
     * @param UpdateJobWorkRequest $request
     *
     * @return Response
     */
    public function update($id, JobWorkRequest $request)
    {
        $jobWork = $this->jobWorkRepository->findWithoutFail($id);

        if (empty($jobWork)) {
            Flash::error('Job Work not found');

            return redirect(route('job-works.index'));
        }

        $jobWork = $this->jobWorkRepository->update($request->all(), $id);

        Flash::success('Job Work updated successfully.');

        return redirect(route('job-works.index'));
    }

    /**
     * Remove the specified JobWork from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jobWork = $this->jobWorkRepository->findWithoutFail($id);

        if (empty($jobWork)) {
            Flash::error('Job Work not found');

            return redirect(route('job-works.index'));
        }

        $this->jobWorkRepository->delete($id);

        Flash::success('Job Work deleted successfully.');

        return redirect(route('job-works.index'));
    }

    public function findJobWork(Request $request){

        $data = JobWork::all()->where('job_id', $request->id)->first();

        return response()->json($data);

    }

}
