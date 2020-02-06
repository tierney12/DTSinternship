<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Dentist</th>
        <th>Course</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($courseDentists as $courseDentist)
        <tr class="clickable"
            data-url="{{ route('course-dentists.show', $courseDentist) }}">
            <td>{!! $courseDentist->dentist->name !!}</td>
            <td>{!! $courseDentist->course->name !!}</td>
            {{--<td>{!! $courseDentist->created_by !!}</td>--}}
            {{--<td>{!! $courseDentist->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>