<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Tech</th>
        <th>User</th>
        <th>Surname</th>
        <th>Firstname</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($staff as $staff)
        <tr class="clickable"
            data-url="{{ route('staff.show', $staff) }}">
            <td>{!! $staff->tech !!}</td>
            <td>{!! $staff->user->name !!}</td>
            <td>{!! $staff->surname !!}</td>
            <td>{!! $staff->firstname !!}</td>
            {{--<td>{!! $staff->created_by !!}</td>--}}
            {{--<td>{!! $staff->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>