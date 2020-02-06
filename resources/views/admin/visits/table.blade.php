<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Dentist</th>
        <th>Visit Details</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($visits as $visit)
        <tr class="clickable"
            data-url="{{ route('visits.show', $visit) }}">
            <td>{!! $visit->dentist->name !!}</td>
            <td>{!! $visit->visitDetails->name !!}</td>
            {{--<td>{!! $visit->created_by !!}</td>--}}
            {{--<td>{!! $visit->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>