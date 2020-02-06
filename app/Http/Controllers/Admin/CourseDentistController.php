<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CourseDentistRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\CourseDentistRepository;
use App\Repositories\DentistRepository;
use App\Repositories\CourseRepository;

class CourseDentistController extends AppBaseController
{
    /** @var  CourseDentistRepository */

    private $courseDentistRepository;
    private $dentistRepository;
    private $courseRepository;

    public function __construct(CourseDentistRepository $courseDentistRepo, DentistRepository $dentistRepo, CourseRepository $courseRepo)
    {
        $this->courseDentistRepository = $courseDentistRepo;
        $this->dentistRepository = $dentistRepo;
        $this->courseRepository = $courseRepo;
    }

    /**
     * Display a listing of the CourseDentist.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->courseDentistRepository->pushCriteria(new RequestCriteria($request));
        $courseDentists = $this->courseDentistRepository->all();

        return view('admin.course_dentist.index', compact('courseDentists'));
    }

    /**
     * Show the form for creating a new CourseDentist.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $dentists = $this->dentistRepository->all()->pluck('name', 'id');
        $courses = $this->courseRepository->all()->pluck('name', 'id');

        if ($request->ajax()) {
            return view('admin.course_dentist.form');
        }

        return view('admin.course_dentist.create', compact(
            'dentists',
            'courses'));
    }

    /**
     * Store a newly created CourseDentist in storage.
     *
     * @param CreateCourseDentistRequest $request
     *
     * @return Response
     */
    public function store(CourseDentistRequest $request)
    {
        $input = $request->all();

        $courseDentist = $this->courseDentistRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $courseDentist->id,
                'name' => $courseDentist->name,
            ];

            return response()->json($data);
        }

        Flash::success('Course Dentist saved successfully.');

        return redirect(route('course-dentists.index'));
    }

    /**
     * Display the specified CourseDentist.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $courseDentist = $this->courseDentistRepository->findWithoutFail($id);

        if (empty($courseDentist)) {
            Flash::error('Course Dentist not found');

            return redirect(route('course-dentists.index'));
        }

        return view('admin.course_dentist.show', compact('courseDentist'));
    }

    /**
     * Show the form for editing the specified CourseDentist.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $courseDentist = $this->courseDentistRepository->findWithoutFail($id);
        $dentists = $this->dentistRepository->all()->pluck('name', 'id');
        $courses = $this->courseRepository->all()->pluck('name', 'id');

        if (empty($courseDentist)) {
            Flash::error('Course Dentist not found');

            return redirect(route('course-dentists.index'));
        }

        return view('admin.course_dentist.edit', compact(
            'courseDentist',
            'dentists',
            'courses'));
    }

    /**
     * Update the specified CourseDentist in storage.
     *
     * @param  int              $id
     * @param UpdateCourseDentistRequest $request
     *
     * @return Response
     */
    public function update($id, CourseDentistRequest $request)
    {
        $courseDentist = $this->courseDentistRepository->findWithoutFail($id);

        if (empty($courseDentist)) {
            Flash::error('Course Dentist not found');

            return redirect(route('course-dentists.index'));
        }

        $courseDentist = $this->courseDentistRepository->update($request->all(), $id);

        Flash::success('Course Dentist updated successfully.');

        return redirect(route('course-dentists.index'));
    }

    /**
     * Remove the specified CourseDentist from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $courseDentist = $this->courseDentistRepository->findWithoutFail($id);

        if (empty($courseDentist)) {
            Flash::error('Course Dentist not found');

            return redirect(route('course-dentists.index'));
        }

        $this->courseDentistRepository->delete($id);

        Flash::success('Course Dentist deleted successfully.');

        return redirect(route('course-dentists.index'));
    }
}
