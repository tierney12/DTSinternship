<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DepartmentRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\DepartmentRepository;
use App\Repositories\ChecklistRepository;
use App\Models\Department;

class DepartmentController extends AppBaseController
{
    /** @var  DepartmentRepository */

    private $departmentRepository;
    private $checklistRepository;

    public function __construct(DepartmentRepository $departmentRepo, ChecklistRepository $checklistRepo)
    {
        $this->departmentRepository = $departmentRepo;
        $this->checklistRepository = $checklistRepo;
    }

    /**
     * Display a listing of the Department.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->departmentRepository->pushCriteria(new RequestCriteria($request));
        $departments = $this->departmentRepository->all();

        return view('admin.departments.index', compact('departments'));
    }

    /**
     * Show the form for creating a new Department.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $checklists = $this->checklistRepository->all()->pluck('name', 'id');

        if ($request->ajax()) {
            return view('admin.departments.form');
        }

        return view('admin.departments.create', compact(
            'checklists'));
    }

    /**
     * Store a newly created Department in storage.
     *
     * @param CreateDepartmentRequest $request
     *
     * @return Response
     */
    public function store(DepartmentRequest $request)
    {
        $input = $request->all();

        $department = $this->departmentRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $department->id,
                'name' => $department->name,
            ];

            return response()->json($data);
        }

        Flash::success('Department saved successfully.');

        return redirect(route('departments.index'));
    }

    /**
     * Display the specified Department.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $department = $this->departmentRepository->findWithoutFail($id);

        if (empty($department)) {
            Flash::error('Department not found');

            return redirect(route('departments.index'));
        }

        return view('admin.departments.show', compact('department'));
    }

    /**
     * Show the form for editing the specified Department.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $department = $this->departmentRepository->findWithoutFail($id);
        $checklists = $this->checklistRepository->all()->pluck('name', 'id');

        if (empty($department)) {
            Flash::error('Department not found');

            return redirect(route('departments.index'));
        }

        return view('admin.departments.edit', compact(
            'department',
            'checklists'));
    }

    /**
     * Update the specified Department in storage.
     *
     * @param  int              $id
     * @param UpdateDepartmentRequest $request
     *
     * @return Response
     */
    public function update($id, DepartmentRequest $request)
    {
        $department = $this->departmentRepository->findWithoutFail($id);

        if (empty($department)) {
            Flash::error('Department not found');

            return redirect(route('departments.index'));
        }

        $department = $this->departmentRepository->update($request->all(), $id);

        Flash::success('Department updated successfully.');

        return redirect(route('departments.index'));
    }

    /**
     * Remove the specified Department from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $department = $this->departmentRepository->findWithoutFail($id);

        if (empty($department)) {
            Flash::error('Department not found');

            return redirect(route('departments.index'));
        }

        $this->departmentRepository->delete($id);

        Flash::success('Department deleted successfully.');

        return redirect(route('departments.index'));
    }

    public function findDepartmentWork(Request $request){

        $data = Department::select('crown_bridge_work', 'pros_work', 'id')->where('id', $request->id)->get();

        return response()->json($data);
    }
}
