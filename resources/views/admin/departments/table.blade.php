<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Name</th>
        <th>Checklist</th>
        <th>Crown Bridge Work</th>
        <th>Pros Work</th>
        <th>Created By</th>
        <th>Updated By</th>
        </tr>
    </thead>
    <tbody>
    @foreach($departments as $department)
        <tr class="clickable"
            data-url="{{ route('departments.show', $department) }}">
            <td>{!! $department->name !!}</td>
            <td>{!! $department->checklist->name !!}</td>
            <td>{!! $department->crown_bridge_work !!}</td>
            <td>{!! $department->pros_work !!}</td>
            <td>{!! $department->created_by !!}</td>
            <td>{!! $department->updated_by !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>