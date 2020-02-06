<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Permission</th>
        <th>User</th>
        </tr>
    </thead>
    <tbody>
    @foreach($permissionUsers as $permissionUser)
        <tr class="clickable"
            data-url="{{ route('permission-users.show', $permissionUser) }}">
            <td>{!! $permissionUser->permission->name !!}</td>
            <td>{!! $permissionUser->user->name !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>