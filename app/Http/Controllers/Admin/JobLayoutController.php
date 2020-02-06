<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\JobLayoutRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\JobLayoutRepository;

class JobLayoutController extends AppBaseController
{
    /** @var  JobLayoutRepository */

    private $jobLayoutRepository;

    public function __construct(JobLayoutRepository $jobLayoutRepo)
    {
        $this->jobLayoutRepository = $jobLayoutRepo;
    }

    /**
     * Display a listing of the JobLayout.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->jobLayoutRepository->pushCriteria(new RequestCriteria($request));
        $jobLayouts = $this->jobLayoutRepository->all();

        return view('admin.job_layouts.index', compact('jobLayouts'));
    }

    /**
     * Show the form for creating a new JobLayout.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        
        if ($request->ajax()) {
            return view('admin.job_layouts.form');
        }

        return view('admin.job_layouts.create');
    }

    /**
     * Store a newly created JobLayout in storage.
     *
     * @param CreateJobLayoutRequest $request
     *
     * @return Response
     */
    public function store(JobLayoutRequest $request)
    {
        $input = $request->all();

        $jobLayout = $this->jobLayoutRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $jobLayout->id,
                'name' => $jobLayout->name,
            ];

            return response()->json($data);
        }

        Flash::success('Job Layout saved successfully.');

        return redirect(route('job-layouts.index'));
    }

    /**
     * Display the specified JobLayout.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jobLayout = $this->jobLayoutRepository->findWithoutFail($id);

        if (empty($jobLayout)) {
            Flash::error('Job Layout not found');

            return redirect(route('job-layouts.index'));
        }

        return view('admin.job_layouts.show', compact('jobLayout'));
    }

    /**
     * Show the form for editing the specified JobLayout.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jobLayout = $this->jobLayoutRepository->findWithoutFail($id);
        
        if (empty($jobLayout)) {
            Flash::error('Job Layout not found');

            return redirect(route('job-layouts.index'));
        }

        return view('admin.job_layouts.edit', compact(
            'jobLayout'));
    }

    /**
     * Update the specified JobLayout in storage.
     *
     * @param  int              $id
     * @param UpdateJobLayoutRequest $request
     *
     * @return Response
     */
    public function update($id, JobLayoutRequest $request)
    {
        $jobLayout = $this->jobLayoutRepository->findWithoutFail($id);

        if (empty($jobLayout)) {
            Flash::error('Job Layout not found');

            return redirect(route('job-layouts.index'));
        }

        $jobLayout = $this->jobLayoutRepository->update($request->all(), $id);

        Flash::success('Job Layout updated successfully.');

        return redirect(route('job-layouts.index'));
    }

    /**
     * Remove the specified JobLayout from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jobLayout = $this->jobLayoutRepository->findWithoutFail($id);

        if (empty($jobLayout)) {
            Flash::error('Job Layout not found');

            return redirect(route('job-layouts.index'));
        }

        $this->jobLayoutRepository->delete($id);

        Flash::success('Job Layout deleted successfully.');

        return redirect(route('job-layouts.index'));
    }
}
