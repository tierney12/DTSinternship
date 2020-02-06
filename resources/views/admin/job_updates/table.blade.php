<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Job</th>
        <th>Job Update Item</th>
        <th>Technician Ref</th>
        <th>Units</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($jobUpdates as $jobUpdate)
        <tr class="clickable"
            data-url="{{ route('job-updates.show', $jobUpdate) }}">
            <td>{!! $jobUpdate->job->name !!}</td>
            <td>{!! $jobUpdate->jobUpdateItem->name !!}</td>
            <td>{!! $jobUpdate->technician_ref !!}</td>
            <td>{!! $jobUpdate->units !!}</td>
            {{--<td>{!! $jobUpdate->created_by !!}</td>--}}
            {{--<td>{!! $jobUpdate->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>