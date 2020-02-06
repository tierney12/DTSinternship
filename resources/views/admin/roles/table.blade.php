<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Name</th>
        <th>Slug</th>
        <th>Description</th>
        <th>Level</th>
        </tr>
    </thead>
    <tbody>
    @foreach($roles as $role)
        <tr class="clickable"
            data-url="{{ route('roles.show', $role) }}">
            <td>{!! $role->name !!}</td>
            <td>{!! $role->slug !!}</td>
            <td>{!! $role->description !!}</td>
            <td>{!! $role->level !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>