<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\JobUpdateItemRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\JobUpdateItemRepository;

class JobUpdateItemController extends AppBaseController
{
    /** @var  JobUpdateItemRepository */

    private $jobUpdateItemRepository;

    public function __construct(JobUpdateItemRepository $jobUpdateItemRepo)
    {
        $this->jobUpdateItemRepository = $jobUpdateItemRepo;
    }

    /**
     * Display a listing of the JobUpdateItem.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->jobUpdateItemRepository->pushCriteria(new RequestCriteria($request));
        $jobUpdateItems = $this->jobUpdateItemRepository->all();

        return view('admin.job_update_items.index', compact('jobUpdateItems'));
    }

    /**
     * Show the form for creating a new JobUpdateItem.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        
        if ($request->ajax()) {
            return view('admin.job_update_items.form');
        }

        return view('admin.job_update_items.create');
    }

    /**
     * Store a newly created JobUpdateItem in storage.
     *
     * @param CreateJobUpdateItemRequest $request
     *
     * @return Response
     */
    public function store(JobUpdateItemRequest $request)
    {
        $input = $request->all();

        $jobUpdateItem = $this->jobUpdateItemRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $jobUpdateItem->id,
                'name' => $jobUpdateItem->name,
            ];

            return response()->json($data);
        }

        Flash::success('Job Update Item saved successfully.');

        return redirect(route('job-update-items.index'));
    }

    /**
     * Display the specified JobUpdateItem.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jobUpdateItem = $this->jobUpdateItemRepository->findWithoutFail($id);

        if (empty($jobUpdateItem)) {
            Flash::error('Job Update Item not found');

            return redirect(route('job-update-items.index'));
        }

        return view('admin.job_update_items.show', compact('jobUpdateItem'));
    }

    /**
     * Show the form for editing the specified JobUpdateItem.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jobUpdateItem = $this->jobUpdateItemRepository->findWithoutFail($id);
        
        if (empty($jobUpdateItem)) {
            Flash::error('Job Update Item not found');

            return redirect(route('job-update-items.index'));
        }

        return view('admin.job_update_items.edit', compact(
            'jobUpdateItem'));
    }

    /**
     * Update the specified JobUpdateItem in storage.
     *
     * @param  int              $id
     * @param UpdateJobUpdateItemRequest $request
     *
     * @return Response
     */
    public function update($id, JobUpdateItemRequest $request)
    {
        $jobUpdateItem = $this->jobUpdateItemRepository->findWithoutFail($id);

        if (empty($jobUpdateItem)) {
            Flash::error('Job Update Item not found');

            return redirect(route('job-update-items.index'));
        }

        $jobUpdateItem = $this->jobUpdateItemRepository->update($request->all(), $id);

        Flash::success('Job Update Item updated successfully.');

        return redirect(route('job-update-items.index'));
    }

    /**
     * Remove the specified JobUpdateItem from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jobUpdateItem = $this->jobUpdateItemRepository->findWithoutFail($id);

        if (empty($jobUpdateItem)) {
            Flash::error('Job Update Item not found');

            return redirect(route('job-update-items.index'));
        }

        $this->jobUpdateItemRepository->delete($id);

        Flash::success('Job Update Item deleted successfully.');

        return redirect(route('job-update-items.index'));
    }
}
