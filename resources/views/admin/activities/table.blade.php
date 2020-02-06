<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        <th>Dentist</th>
        </tr>
    </thead>
    <tbody>
    @foreach($activities as $activity)
        <tr class="clickable"
            data-url="{{ route('activities.show', $activity) }}">
            {{--<td>{!! $activity->created_by !!}</td>--}}
            {{--<td>{!! $activity->updated_by !!}</td>--}}
            <td>{!! $activity->dentist->name !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>