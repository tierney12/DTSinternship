<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Dentist</th>
        <th>Job Layout</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($estimates as $estimate)
        <tr class="clickable"
            data-url="{{ route('estimates.show', $estimate) }}">
            <td>{!! $estimate->dentist->name !!}</td>
            <td>{!! $estimate->jobLayout->name !!}</td>
            {{--<td>{!! $estimate->created_by !!}</td>--}}
            {{--<td>{!! $estimate->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>