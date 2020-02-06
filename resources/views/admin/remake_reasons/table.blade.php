<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Code</th>
        <th>Name</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($remakeReasons as $remakeReason)
        <tr class="clickable"
            data-url="{{ route('remake-reasons.show', $remakeReason) }}">
            <td>{!! $remakeReason->code !!}</td>
            <td>{!! $remakeReason->name !!}</td>
            {{--<td>{!! $remakeReason->created_by !!}</td>--}}
            {{--<td>{!! $remakeReason->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>