<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Visit Date</th>
        <th>Phone Or Visit</th>
        <th>Details</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($visitDetails as $visitDetail)
        <tr class="clickable"
            data-url="{{ route('visit-details.show', $visitDetail) }}">
            <td>{!! $visitDetail->visit_date !!}</td>
            <td>{!! $visitDetail->phone_or_visit !!}</td>
            <td>{!! $visitDetail->details !!}</td>
            {{--<td>{!! $visitDetail->created_by !!}</td>--}}
            {{--<td>{!! $visitDetail->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>