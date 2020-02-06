<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ActivityRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\ActivityRepository;
use App\Repositories\DentistRepository;

class ActivityController extends AppBaseController
{
    /** @var  ActivityRepository */

    private $activityRepository;
    private $dentistRepository;

    public function __construct(ActivityRepository $activityRepo, DentistRepository $dentistRepo)
    {
        $this->activityRepository = $activityRepo;
        $this->dentistRepository = $dentistRepo;
    }

    /**
     * Display a listing of the Activity.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->activityRepository->pushCriteria(new RequestCriteria($request));
        $activities = $this->activityRepository->all();

        return view('admin.activities.index', compact('activities'));
    }

    /**
     * Show the form for creating a new Activity.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $dentists = $this->dentistRepository->all()->pluck('name', 'id');

        if ($request->ajax()) {
            return view('admin.activities.form');
        }

        return view('admin.activities.create', compact(
            'dentists'));
    }

    /**
     * Store a newly created Activity in storage.
     *
     * @param CreateActivityRequest $request
     *
     * @return Response
     */
    public function store(ActivityRequest $request)
    {
        $input = $request->all();

        $activity = $this->activityRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $activity->id,
                'name' => $activity->name,
            ];

            return response()->json($data);
        }

        Flash::success('Activity saved successfully.');

        return redirect(route('activities.index'));
    }

    /**
     * Display the specified Activity.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $activity = $this->activityRepository->findWithoutFail($id);

        if (empty($activity)) {
            Flash::error('Activity not found');

            return redirect(route('activities.index'));
        }

        return view('admin.activities.show', compact('activity'));
    }

    /**
     * Show the form for editing the specified Activity.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $activity = $this->activityRepository->findWithoutFail($id);
        $dentists = $this->dentistRepository->all()->pluck('name', 'id');

        if (empty($activity)) {
            Flash::error('Activity not found');

            return redirect(route('activities.index'));
        }

        return view('admin.activities.edit', compact(
            'activity',
            'dentists'));
    }

    /**
     * Update the specified Activity in storage.
     *
     * @param  int              $id
     * @param UpdateActivityRequest $request
     *
     * @return Response
     */
    public function update($id, ActivityRequest $request)
    {
        $activity = $this->activityRepository->findWithoutFail($id);

        if (empty($activity)) {
            Flash::error('Activity not found');

            return redirect(route('activities.index'));
        }

        $activity = $this->activityRepository->update($request->all(), $id);

        Flash::success('Activity updated successfully.');

        return redirect(route('activities.index'));
    }

    /**
     * Remove the specified Activity from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $activity = $this->activityRepository->findWithoutFail($id);

        if (empty($activity)) {
            Flash::error('Activity not found');

            return redirect(route('activities.index'));
        }

        $this->activityRepository->delete($id);

        Flash::success('Activity deleted successfully.');

        return redirect(route('activities.index'));
    }
}
