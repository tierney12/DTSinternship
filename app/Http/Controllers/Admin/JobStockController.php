<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\JobStockRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\JobStockRepository;
use App\Repositories\JobRepository;
use App\Repositories\StockRepository;

class JobStockController extends AppBaseController
{
    /** @var  JobStockRepository */

    private $jobStockRepository;
    private $jobRepository;
    private $stockRepository;

    public function __construct(JobStockRepository $jobStockRepo, JobRepository $jobRepo, StockRepository $stockRepo)
    {
        $this->jobStockRepository = $jobStockRepo;
        $this->jobRepository = $jobRepo;
        $this->stockRepository = $stockRepo;
    }

    /**
     * Display a listing of the JobStock.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->jobStockRepository->pushCriteria(new RequestCriteria($request));
        $jobStocks = $this->jobStockRepository->all();

        return view('admin.job_stocks.index', compact('jobStocks'));
    }

    /**
     * Show the form for creating a new JobStock.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $jobs = $this->jobRepository->all()->pluck('name', 'id');
        $stocks = $this->stockRepository->all()->pluck('name', 'id');

        if ($request->ajax()) {
            return view('admin.job_stocks.form');
        }

        return view('admin.job_stocks.create', compact(
            'jobs',
            'stocks'));
    }

    /**
     * Store a newly created JobStock in storage.
     *
     * @param CreateJobStockRequest $request
     *
     * @return Response
     */
    public function store(JobStockRequest $request)
    {
        $input = $request->all();

        $jobStock = $this->jobStockRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $jobStock->id,
                'name' => $jobStock->name,
            ];

            return response()->json($data);
        }

        Flash::success('Job Stock saved successfully.');

        return redirect(route('job-stocks.index'));
    }

    /**
     * Display the specified JobStock.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jobStock = $this->jobStockRepository->findWithoutFail($id);

        if (empty($jobStock)) {
            Flash::error('Job Stock not found');

            return redirect(route('job-stocks.index'));
        }

        return view('admin.job_stocks.show', compact('jobStock'));
    }

    /**
     * Show the form for editing the specified JobStock.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jobStock = $this->jobStockRepository->findWithoutFail($id);
        $jobs = $this->jobRepository->all()->pluck('name', 'id');
        $stocks = $this->stockRepository->all()->pluck('name', 'id');

        if (empty($jobStock)) {
            Flash::error('Job Stock not found');

            return redirect(route('job-stocks.index'));
        }

        return view('admin.job_stocks.edit', compact(
            'jobStock',
            'jobs',
            'stocks'));
    }

    /**
     * Update the specified JobStock in storage.
     *
     * @param  int              $id
     * @param UpdateJobStockRequest $request
     *
     * @return Response
     */
    public function update($id, JobStockRequest $request)
    {
        $jobStock = $this->jobStockRepository->findWithoutFail($id);

        if (empty($jobStock)) {
            Flash::error('Job Stock not found');

            return redirect(route('job-stocks.index'));
        }

        $jobStock = $this->jobStockRepository->update($request->all(), $id);

        Flash::success('Job Stock updated successfully.');

        return redirect(route('job-stocks.index'));
    }

    /**
     * Remove the specified JobStock from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jobStock = $this->jobStockRepository->findWithoutFail($id);

        if (empty($jobStock)) {
            Flash::error('Job Stock not found');

            return redirect(route('job-stocks.index'));
        }

        $this->jobStockRepository->delete($id);

        Flash::success('Job Stock deleted successfully.');

        return redirect(route('job-stocks.index'));
    }
}
