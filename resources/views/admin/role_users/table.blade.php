<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Role</th>
        <th>User</th>
        </tr>
    </thead>
    <tbody>
    @foreach($roleUsers as $roleUser)
        <tr class="clickable"
            data-url="{{ route('role-users.show', $roleUser) }}">
            <td>{!! $roleUser->role->name !!}</td>
            <td>{!! $roleUser->user->name !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>