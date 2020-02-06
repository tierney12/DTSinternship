<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\JobUpdateRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\JobUpdateRepository;
use App\Repositories\JobRepository;

class JobUpdateController extends AppBaseController
{
    /** @var  JobUpdateRepository */

    private $jobUpdateRepository;
    private $jobRepository;
    private $jobUpdateItemRepository;

    public function __construct(JobUpdateRepository $jobUpdateRepo, JobRepository $jobRepo, JobRepository $jobUpdateItemRepo)
    {
        $this->jobUpdateRepository = $jobUpdateRepo;
        $this->jobRepository = $jobRepo;
        $this->jobUpdateItemRepository = $jobUpdateItemRepo;
    }

    /**
     * Display a listing of the JobUpdate.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->jobUpdateRepository->pushCriteria(new RequestCriteria($request));
        $jobUpdates = $this->jobUpdateRepository->all();

        return view('admin.job_updates.index', compact('jobUpdates'));
    }

    /**
     * Show the form for creating a new JobUpdate.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $jobs = $this->jobRepository->all()->pluck('name', 'id');
        $jobUpdateItems = $this->jobUpdateItemRepository->all()->pluck('name', 'id');

        if ($request->ajax()) {
            return view('admin.job_updates.form');
        }

        return view('admin.job_updates.create', compact(
            'jobs',
            'jobUpdateItems'));
    }

    /**
     * Store a newly created JobUpdate in storage.
     *
     * @param CreateJobUpdateRequest $request
     *
     * @return Response
     */
    public function store(JobUpdateRequest $request)
    {
        $input = $request->all();

        $jobUpdate = $this->jobUpdateRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $jobUpdate->id,
                'name' => $jobUpdate->name,
            ];

            return response()->json($data);
        }

        Flash::success('Job Update saved successfully.');

        return redirect(route('job-updates.index'));
    }

    /**
     * Display the specified JobUpdate.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jobUpdate = $this->jobUpdateRepository->findWithoutFail($id);

        if (empty($jobUpdate)) {
            Flash::error('Job Update not found');

            return redirect(route('job-updates.index'));
        }

        return view('admin.job_updates.show', compact('jobUpdate'));
    }

    /**
     * Show the form for editing the specified JobUpdate.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jobUpdate = $this->jobUpdateRepository->findWithoutFail($id);
        $jobs = $this->jobRepository->all()->pluck('name', 'id');
        $jobUpdateItems = $this->jobUpdateItemRepository->all()->pluck('name', 'id');

        if (empty($jobUpdate)) {
            Flash::error('Job Update not found');

            return redirect(route('job-updates.index'));
        }

        return view('admin.job_updates.edit', compact(
            'jobUpdate',
            'jobs',
            'jobUpdateItems'));
    }

    /**
     * Update the specified JobUpdate in storage.
     *
     * @param  int              $id
     * @param UpdateJobUpdateRequest $request
     *
     * @return Response
     */
    public function update($id, JobUpdateRequest $request)
    {
        $jobUpdate = $this->jobUpdateRepository->findWithoutFail($id);

        if (empty($jobUpdate)) {
            Flash::error('Job Update not found');

            return redirect(route('job-updates.index'));
        }

        $jobUpdate = $this->jobUpdateRepository->update($request->all(), $id);

        Flash::success('Job Update updated successfully.');

        return redirect(route('job-updates.index'));
    }

    /**
     * Remove the specified JobUpdate from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jobUpdate = $this->jobUpdateRepository->findWithoutFail($id);

        if (empty($jobUpdate)) {
            Flash::error('Job Update not found');

            return redirect(route('job-updates.index'));
        }

        $this->jobUpdateRepository->delete($id);

        Flash::success('Job Update deleted successfully.');

        return redirect(route('job-updates.index'));
    }
}
