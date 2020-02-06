<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Area</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($areas as $area)
        <tr class="clickable"
            data-url="{{ route('areas.show', $area) }}">
            <td>{!! $area->Area !!}</td>
            {{--<td>{!! $area->created_by !!}</td>--}}
            {{--<td>{!! $area->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>