<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PermissionUserRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\PermissionUserRepository;
use App\Repositories\PermissionRepository;
use App\Repositories\UserRepository;

class PermissionUserController extends AppBaseController
{
    /** @var  PermissionUserRepository */

    private $permissionUserRepository;
    private $permissionRepository;
    private $userRepository;

    public function __construct(PermissionUserRepository $permissionUserRepo, PermissionRepository $permissionRepo, UserRepository $userRepo)
    {
        $this->permissionUserRepository = $permissionUserRepo;
        $this->permissionRepository = $permissionRepo;
        $this->userRepository = $userRepo;
    }

    /**
     * Display a listing of the PermissionUser.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->permissionUserRepository->pushCriteria(new RequestCriteria($request));
        $permissionUsers = $this->permissionUserRepository->all();

        return view('admin.permission_users.index', compact('permissionUsers'));
    }

    /**
     * Show the form for creating a new PermissionUser.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $permissions = $this->permissionRepository->all()->pluck('name', 'id');
        $users = $this->userRepository->all()->pluck('name', 'id');

        if ($request->ajax()) {
            return view('admin.permission_users.form');
        }

        return view('admin.permission_users.create', compact(
            'permissions',
            'users'));
    }

    /**
     * Store a newly created PermissionUser in storage.
     *
     * @param CreatePermissionUserRequest $request
     *
     * @return Response
     */
    public function store(PermissionUserRequest $request)
    {
        $input = $request->all();

        $permissionUser = $this->permissionUserRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $permissionUser->id,
                'name' => $permissionUser->name,
            ];

            return response()->json($data);
        }

        Flash::success('Permission User saved successfully.');

        return redirect(route('permission-users.index'));
    }

    /**
     * Display the specified PermissionUser.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $permissionUser = $this->permissionUserRepository->findWithoutFail($id);

        if (empty($permissionUser)) {
            Flash::error('Permission User not found');

            return redirect(route('permission-users.index'));
        }

        return view('admin.permission_users.show', compact('permissionUser'));
    }

    /**
     * Show the form for editing the specified PermissionUser.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $permissionUser = $this->permissionUserRepository->findWithoutFail($id);
        $permissions = $this->permissionRepository->all()->pluck('name', 'id');
        $users = $this->userRepository->all()->pluck('name', 'id');

        if (empty($permissionUser)) {
            Flash::error('Permission User not found');

            return redirect(route('permission-users.index'));
        }

        return view('admin.permission_users.edit', compact(
            'permissionUser',
            'permissions',
            'users'));
    }

    /**
     * Update the specified PermissionUser in storage.
     *
     * @param  int              $id
     * @param UpdatePermissionUserRequest $request
     *
     * @return Response
     */
    public function update($id, PermissionUserRequest $request)
    {
        $permissionUser = $this->permissionUserRepository->findWithoutFail($id);

        if (empty($permissionUser)) {
            Flash::error('Permission User not found');

            return redirect(route('permission-users.index'));
        }

        $permissionUser = $this->permissionUserRepository->update($request->all(), $id);

        Flash::success('Permission User updated successfully.');

        return redirect(route('permission-users.index'));
    }

    /**
     * Remove the specified PermissionUser from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $permissionUser = $this->permissionUserRepository->findWithoutFail($id);

        if (empty($permissionUser)) {
            Flash::error('Permission User not found');

            return redirect(route('permission-users.index'));
        }

        $this->permissionUserRepository->delete($id);

        Flash::success('Permission User deleted successfully.');

        return redirect(route('permission-users.index'));
    }
}
