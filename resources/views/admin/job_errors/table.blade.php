<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Name</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($jobErrors as $jobError)
        <tr class="clickable"
            data-url="{{ route('job-errors.show', $jobError) }}">
            <td>{!! $jobError->name !!}</td>
            {{--<td>{!! $jobError->created_by !!}</td>--}}
            {{--<td>{!! $jobError->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>