<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Course Title</th>
        <th>Course Date</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($courses as $course)
        <tr class="clickable"
            data-url="{{ route('courses.show', $course) }}">
            <td>{!! $course->course_title !!}</td>
            <td>{!! $course->course_date !!}</td>
            {{--<td>{!! $course->created_by !!}</td>--}}
            {{--<td>{!! $course->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>