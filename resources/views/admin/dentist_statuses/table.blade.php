<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Name</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($dentistStatuses as $dentistStatus)
        <tr class="clickable"
            data-url="{{ route('dentist-statuses.show', $dentistStatus) }}">
            <td>{!! $dentistStatus->name !!}</td>
            {{--<td>{!! $dentistStatus->created_by !!}</td>--}}
            {{--<td>{!! $dentistStatus->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>