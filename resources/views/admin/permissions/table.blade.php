<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Name</th>
        <th>Slug</th>
        <th>Description</th>
        <th>Model</th>
        </tr>
    </thead>
    <tbody>
    @foreach($permissions as $permission)
        <tr class="clickable"
            data-url="{{ route('permissions.show', $permission) }}">
            <td>{!! $permission->name !!}</td>
            <td>{!! $permission->slug !!}</td>
            <td>{!! $permission->description !!}</td>
            <td>{!! $permission->model !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>