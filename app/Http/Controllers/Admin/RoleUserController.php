<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RoleUserRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\RoleUserRepository;
use App\Repositories\RoleRepository;
use App\Repositories\UserRepository;

class RoleUserController extends AppBaseController
{
    /** @var  RoleUserRepository */

    private $roleUserRepository;
    private $roleRepository;
    private $userRepository;

    public function __construct(RoleUserRepository $roleUserRepo, RoleRepository $roleRepo, UserRepository $userRepo)
    {
        $this->roleUserRepository = $roleUserRepo;
        $this->roleRepository = $roleRepo;
        $this->userRepository = $userRepo;
    }

    /**
     * Display a listing of the RoleUser.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->roleUserRepository->pushCriteria(new RequestCriteria($request));
        $roleUsers = $this->roleUserRepository->all();

        return view('admin.role_users.index', compact('roleUsers'));
    }

    /**
     * Show the form for creating a new RoleUser.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $roles = $this->roleRepository->all()->pluck('name', 'id');
        $users = $this->userRepository->all()->pluck('name', 'id');

        if ($request->ajax()) {
            return view('admin.role_users.form');
        }

        return view('admin.role_users.create', compact(
            'roles',
            'users'));
    }

    /**
     * Store a newly created RoleUser in storage.
     *
     * @param CreateRoleUserRequest $request
     *
     * @return Response
     */
    public function store(RoleUserRequest $request)
    {
        $input = $request->all();

        $roleUser = $this->roleUserRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $roleUser->id,
                'name' => $roleUser->name,
            ];

            return response()->json($data);
        }

        Flash::success('Role User saved successfully.');

        return redirect(route('role-users.index'));
    }

    /**
     * Display the specified RoleUser.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $roleUser = $this->roleUserRepository->findWithoutFail($id);

        if (empty($roleUser)) {
            Flash::error('Role User not found');

            return redirect(route('role-users.index'));
        }

        return view('admin.role_users.show', compact('roleUser'));
    }

    /**
     * Show the form for editing the specified RoleUser.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $roleUser = $this->roleUserRepository->findWithoutFail($id);
        $roles = $this->roleRepository->all()->pluck('name', 'id');
        $users = $this->userRepository->all()->pluck('name', 'id');

        if (empty($roleUser)) {
            Flash::error('Role User not found');

            return redirect(route('role-users.index'));
        }

        return view('admin.role_users.edit', compact(
            'roleUser',
            'roles',
            'users'));
    }

    /**
     * Update the specified RoleUser in storage.
     *
     * @param  int              $id
     * @param UpdateRoleUserRequest $request
     *
     * @return Response
     */
    public function update($id, RoleUserRequest $request)
    {
        $roleUser = $this->roleUserRepository->findWithoutFail($id);

        if (empty($roleUser)) {
            Flash::error('Role User not found');

            return redirect(route('role-users.index'));
        }

        $roleUser = $this->roleUserRepository->update($request->all(), $id);

        Flash::success('Role User updated successfully.');

        return redirect(route('role-users.index'));
    }

    /**
     * Remove the specified RoleUser from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $roleUser = $this->roleUserRepository->findWithoutFail($id);

        if (empty($roleUser)) {
            Flash::error('Role User not found');

            return redirect(route('role-users.index'));
        }

        $this->roleUserRepository->delete($id);

        Flash::success('Role User deleted successfully.');

        return redirect(route('role-users.index'));
    }
}
