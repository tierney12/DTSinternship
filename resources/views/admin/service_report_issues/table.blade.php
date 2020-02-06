<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Description</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($serviceReportIssues as $serviceReportIssue)
        <tr class="clickable"
            data-url="{{ route('service-report-issues.show', $serviceReportIssue) }}">
            <td>{!! $serviceReportIssue->description !!}</td>
            {{--<td>{!! $serviceReportIssue->created_by !!}</td>--}}
            {{--<td>{!! $serviceReportIssue->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>