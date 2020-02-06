<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PermissionRoleRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\PermissionRoleRepository;
use App\Repositories\PermissionRepository;
use App\Repositories\RoleRepository;

class PermissionRoleController extends AppBaseController
{
    /** @var  PermissionRoleRepository */

    private $permissionRoleRepository;
    private $permissionRepository;
    private $roleRepository;

    public function __construct(PermissionRoleRepository $permissionRoleRepo, PermissionRepository $permissionRepo, RoleRepository $roleRepo)
    {
        $this->permissionRoleRepository = $permissionRoleRepo;
        $this->permissionRepository = $permissionRepo;
        $this->roleRepository = $roleRepo;
    }

    /**
     * Display a listing of the PermissionRole.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->permissionRoleRepository->pushCriteria(new RequestCriteria($request));
        $permissionRoles = $this->permissionRoleRepository->all();

        return view('admin.permission_roles.index', compact('permissionRoles'));
    }

    /**
     * Show the form for creating a new PermissionRole.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $permissions = $this->permissionRepository->all()->pluck('name', 'id');
        $roles = $this->roleRepository->all()->pluck('name', 'id');

        if ($request->ajax()) {
            return view('admin.permission_roles.form');
        }

        return view('admin.permission_roles.create', compact(
            'permissions',
            'roles'));
    }

    /**
     * Store a newly created PermissionRole in storage.
     *
     * @param CreatePermissionRoleRequest $request
     *
     * @return Response
     */
    public function store(PermissionRoleRequest $request)
    {
        $input = $request->all();

        $permissionRole = $this->permissionRoleRepository->create($input);

        if ($request->ajax()) {
            $data = [
                'id'   => $permissionRole->id,
                'name' => $permissionRole->name,
            ];

            return response()->json($data);
        }

        Flash::success('Permission Role saved successfully.');

        return redirect(route('permission-roles.index'));
    }

    /**
     * Display the specified PermissionRole.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $permissionRole = $this->permissionRoleRepository->findWithoutFail($id);

        if (empty($permissionRole)) {
            Flash::error('Permission Role not found');

            return redirect(route('permission-roles.index'));
        }

        return view('admin.permission_roles.show', compact('permissionRole'));
    }

    /**
     * Show the form for editing the specified PermissionRole.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $permissionRole = $this->permissionRoleRepository->findWithoutFail($id);
        $permissions = $this->permissionRepository->all()->pluck('name', 'id');
        $roles = $this->roleRepository->all()->pluck('name', 'id');

        if (empty($permissionRole)) {
            Flash::error('Permission Role not found');

            return redirect(route('permission-roles.index'));
        }

        return view('admin.permission_roles.edit', compact(
            'permissionRole',
            'permissions',
            'roles'));
    }

    /**
     * Update the specified PermissionRole in storage.
     *
     * @param  int              $id
     * @param UpdatePermissionRoleRequest $request
     *
     * @return Response
     */
    public function update($id, PermissionRoleRequest $request)
    {
        $permissionRole = $this->permissionRoleRepository->findWithoutFail($id);

        if (empty($permissionRole)) {
            Flash::error('Permission Role not found');

            return redirect(route('permission-roles.index'));
        }

        $permissionRole = $this->permissionRoleRepository->update($request->all(), $id);

        Flash::success('Permission Role updated successfully.');

        return redirect(route('permission-roles.index'));
    }

    /**
     * Remove the specified PermissionRole from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $permissionRole = $this->permissionRoleRepository->findWithoutFail($id);

        if (empty($permissionRole)) {
            Flash::error('Permission Role not found');

            return redirect(route('permission-roles.index'));
        }

        $this->permissionRoleRepository->delete($id);

        Flash::success('Permission Role deleted successfully.');

        return redirect(route('permission-roles.index'));
    }
}
