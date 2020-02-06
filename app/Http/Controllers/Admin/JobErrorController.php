<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\JobErrorRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\JobErrorRepository;

class JobErrorController extends AppBaseController
{
    /** @var  JobErrorRepository */

    private $jobErrorRepository;

    public function __construct(JobErrorRepository $jobErrorRepo)
    {
        $this->jobErrorRepository = $jobErrorRepo;
    }

    /**
     * Display a listing of the JobError.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->jobErrorRepository->pushCriteria(new RequestCriteria($request));
        $jobErrors = $this->jobErrorRepository->all();

        return view('admin.job_errors.index', compact('jobErrors'));
    }

    /**
     * Show the form for creating a new JobError.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        
        if ($request->ajax()) {
            return view('admin.job_errors.form');
        }

        return view('admin.job_errors.create');
    }

    /**
     * Store a newly created JobError in storage.
     *
     * @param CreateJobErrorRequest $request
     *
     * @return Response
     */
    public function store(JobErrorRequest $request)
    {
        $input = $request->all();

        $jobError = $this->jobErrorRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $jobError->id,
                'name' => $jobError->name,
            ];

            return response()->json($data);
        }

        Flash::success('Job Error saved successfully.');

        return redirect(route('job-errors.index'));
    }

    /**
     * Display the specified JobError.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jobError = $this->jobErrorRepository->findWithoutFail($id);

        if (empty($jobError)) {
            Flash::error('Job Error not found');

            return redirect(route('job-errors.index'));
        }

        return view('admin.job_errors.show', compact('jobError'));
    }

    /**
     * Show the form for editing the specified JobError.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jobError = $this->jobErrorRepository->findWithoutFail($id);
        
        if (empty($jobError)) {
            Flash::error('Job Error not found');

            return redirect(route('job-errors.index'));
        }

        return view('admin.job_errors.edit', compact(
            'jobError'));
    }

    /**
     * Update the specified JobError in storage.
     *
     * @param  int              $id
     * @param UpdateJobErrorRequest $request
     *
     * @return Response
     */
    public function update($id, JobErrorRequest $request)
    {
        $jobError = $this->jobErrorRepository->findWithoutFail($id);

        if (empty($jobError)) {
            Flash::error('Job Error not found');

            return redirect(route('job-errors.index'));
        }

        $jobError = $this->jobErrorRepository->update($request->all(), $id);

        Flash::success('Job Error updated successfully.');

        return redirect(route('job-errors.index'));
    }

    /**
     * Remove the specified JobError from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jobError = $this->jobErrorRepository->findWithoutFail($id);

        if (empty($jobError)) {
            Flash::error('Job Error not found');

            return redirect(route('job-errors.index'));
        }

        $this->jobErrorRepository->delete($id);

        Flash::success('Job Error deleted successfully.');

        return redirect(route('job-errors.index'));
    }
}
