<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Estimate</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($estimateDetails as $estimateDetail)
        <tr class="clickable"
            data-url="{{ route('estimate-details.show', $estimateDetail) }}">
            <td>{!! $estimateDetail->estimate->name !!}</td>
            {{--<td>{!! $estimateDetail->created_by !!}</td>--}}
            {{--<td>{!! $estimateDetail->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>