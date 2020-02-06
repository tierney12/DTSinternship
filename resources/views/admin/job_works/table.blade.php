<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Job</th>
        <th>Pros Work</th>
        <th>Crown Bridge Work</th>
        <th>Created By</th>
        <th>Updated By</th>
        </tr>
    </thead>
    <tbody>
    @foreach($jobWorks as $jobWork)
        <tr class="clickable"
            data-url="{{ route('job-works.show', $jobWork) }}">
            <td>{!! $jobWork->job->name !!}</td>
            <td>{!! $jobWork->prosWork->name !!}</td>
            <td>{!! $jobWork->crownBridgeWork->name !!}</td>
            <td>{!! $jobWork->created_by !!}</td>
            <td>{!! $jobWork->updated_by !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>