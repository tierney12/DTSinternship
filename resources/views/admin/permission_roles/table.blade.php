<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Permission</th>
        <th>Role</th>
        </tr>
    </thead>
    <tbody>
    @foreach($permissionRoles as $permissionRole)
        <tr class="clickable"
            data-url="{{ route('permission-roles.show', $permissionRole) }}">
            <td>{!! $permissionRole->permission->name !!}</td>
            <td>{!! $permissionRole->role->name !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>