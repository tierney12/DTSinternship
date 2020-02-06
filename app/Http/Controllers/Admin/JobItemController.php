<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\JobItemRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\JobItemRepository;
use App\Repositories\JobRepository;
use App\Repositories\ProductRepository;

class JobItemController extends AppBaseController
{
    /** @var  JobItemRepository */

    private $jobItemRepository;
    private $jobRepository;
    private $productRepository;

    public function __construct(JobItemRepository $jobItemRepo, JobRepository $jobRepo, ProductRepository $productRepo)
    {
        $this->jobItemRepository = $jobItemRepo;
        $this->jobRepository = $jobRepo;
        $this->productRepository = $productRepo;
    }

    /**
     * Display a listing of the JobItem.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->jobItemRepository->pushCriteria(new RequestCriteria($request));
        $jobItems = $this->jobItemRepository->all();

        return view('admin.job_items.index', compact('jobItems'));
    }

    /**
     * Show the form for creating a new JobItem.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $jobs = $this->jobRepository->all()->pluck('name', 'id');
        $products = $this->productRepository->all()->pluck('name', 'id');

        if ($request->ajax()) {
            return view('admin.job_items.form');
        }

        return view('admin.job_items.create', compact(
            'jobs',
            'products'));
    }

    /**
     * Store a newly created JobItem in storage.
     *
     * @param CreateJobItemRequest $request
     *
     * @return Response
     */
    public function store(JobItemRequest $request)
    {
        $input = $request->all();

        $jobItem = $this->jobItemRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $jobItem->id,
                'name' => $jobItem->name,
            ];

            return response()->json($data);
        }

        Flash::success('Job Item saved successfully.');

        return redirect(route('job-items.index'));
    }

    /**
     * Display the specified JobItem.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jobItem = $this->jobItemRepository->findWithoutFail($id);

        if (empty($jobItem)) {
            Flash::error('Job Item not found');

            return redirect(route('job-items.index'));
        }

        return view('admin.job_items.show', compact('jobItem'));
    }

    /**
     * Show the form for editing the specified JobItem.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jobItem = $this->jobItemRepository->findWithoutFail($id);
        $jobs = $this->jobRepository->all()->pluck('name', 'id');
        $products = $this->productRepository->all()->pluck('name', 'id');

        if (empty($jobItem)) {
            Flash::error('Job Item not found');

            return redirect(route('job-items.index'));
        }

        return view('admin.job_items.edit', compact(
            'jobItem',
            'jobs',
            'products'));
    }

    /**
     * Update the specified JobItem in storage.
     *
     * @param  int              $id
     * @param UpdateJobItemRequest $request
     *
     * @return Response
     */
    public function update($id, JobItemRequest $request)
    {
        $jobItem = $this->jobItemRepository->findWithoutFail($id);

        if (empty($jobItem)) {
            Flash::error('Job Item not found');

            return redirect(route('job-items.index'));
        }

        $jobItem = $this->jobItemRepository->update($request->all(), $id);

        Flash::success('Job Item updated successfully.');

        return redirect(route('job-items.index'));
    }

    /**
     * Remove the specified JobItem from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jobItem = $this->jobItemRepository->findWithoutFail($id);

        if (empty($jobItem)) {
            Flash::error('Job Item not found');

            return redirect(route('job-items.index'));
        }

        $this->jobItemRepository->delete($id);

        Flash::success('Job Item deleted successfully.');

        return redirect(route('job-items.index'));
    }
}
