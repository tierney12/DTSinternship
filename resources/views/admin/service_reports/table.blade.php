<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Dentist</th>
        <th>Job</th>
        <th>Description</th>
        <th>Service Report Issue</th>
        <th>Root Cause</th>
        <th>Resolution</th>
        <th>Tech Resolution</th>
        <th>Tech Ref</th>
        <th>Cancelling Tech Ref</th>
        <th>Report To</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($serviceReports as $serviceReport)
        <tr class="clickable"
            data-url="{{ route('service-reports.show', $serviceReport) }}">
            <td>{!! $serviceReport->dentist->name !!}</td>
            <td>{!! $serviceReport->job->name !!}</td>
            <td>{!! $serviceReport->description !!}</td>
            <td>{!! $serviceReport->serviceReportIssue->name !!}</td>
            <td>{!! $serviceReport->root_cause !!}</td>
            <td>{!! $serviceReport->resolution !!}</td>
            <td>{!! $serviceReport->tech_resolution !!}</td>
            <td>{!! $serviceReport->tech_ref !!}</td>
            <td>{!! $serviceReport->cancelling_tech_ref !!}</td>
            <td>{!! $serviceReport->report_to !!}</td>
            {{--<td>{!! $serviceReport->created_by !!}</td>--}}
            {{--<td>{!! $serviceReport->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>