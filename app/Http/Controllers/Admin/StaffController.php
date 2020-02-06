<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StaffRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\StaffRepository;
use App\Repositories\UserRepository;

class StaffController extends AppBaseController
{
    /** @var  StaffRepository */

    private $staffRepository;
    private $userRepository;

    public function __construct(StaffRepository $staffRepo, UserRepository $userRepo)
    {
        $this->staffRepository = $staffRepo;
        $this->userRepository = $userRepo;
    }

    /**
     * Display a listing of the Staff.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->staffRepository->pushCriteria(new RequestCriteria($request));
        $staff = $this->staffRepository->all();

        return view('admin.staff.index', compact('staff'));
    }

    /**
     * Show the form for creating a new Staff.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $users = $this->userRepository->all()->pluck('name', 'id');

        if ($request->ajax()) {
            return view('admin.staff.form');
        }

        return view('admin.staff.create', compact(
            'users'));
    }

    /**
     * Store a newly created Staff in storage.
     *
     * @param CreateStaffRequest $request
     *
     * @return Response
     */
    public function store(StaffRequest $request)
    {
        $input = $request->all();

        $staff = $this->staffRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $staff->id,
                'name' => $staff->name,
            ];

            return response()->json($data);
        }

        Flash::success('Staff saved successfully.');

        return redirect(route('staff.index'));
    }

    /**
     * Display the specified Staff.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $staff = $this->staffRepository->findWithoutFail($id);

        if (empty($staff)) {
            Flash::error('Staff not found');

            return redirect(route('staff.index'));
        }

        return view('admin.staff.show', compact('staff'));
    }

    /**
     * Show the form for editing the specified Staff.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $staff = $this->staffRepository->findWithoutFail($id);
        $users = $this->userRepository->all()->pluck('name', 'id');

        if (empty($staff)) {
            Flash::error('Staff not found');

            return redirect(route('staff.index'));
        }

        return view('admin.staff.edit', compact(
            'staff',
            'users'));
    }

    /**
     * Update the specified Staff in storage.
     *
     * @param  int              $id
     * @param UpdateStaffRequest $request
     *
     * @return Response
     */
    public function update($id, StaffRequest $request)
    {
        $staff = $this->staffRepository->findWithoutFail($id);

        if (empty($staff)) {
            Flash::error('Staff not found');

            return redirect(route('staff.index'));
        }

        $staff = $this->staffRepository->update($request->all(), $id);

        Flash::success('Staff updated successfully.');

        return redirect(route('staff.index'));
    }

    /**
     * Remove the specified Staff from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $staff = $this->staffRepository->findWithoutFail($id);

        if (empty($staff)) {
            Flash::error('Staff not found');

            return redirect(route('staff.index'));
        }

        $this->staffRepository->delete($id);

        Flash::success('Staff deleted successfully.');

        return redirect(route('staff.index'));
    }
}
