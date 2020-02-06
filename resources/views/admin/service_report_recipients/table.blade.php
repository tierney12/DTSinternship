<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Email</th>
        <th>Active</th>
        <th>Receives Admin</th>
        <th>Receives Director</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($serviceReportRecipients as $serviceReportRecipient)
        <tr class="clickable"
            data-url="{{ route('service-report-recipients.show', $serviceReportRecipient) }}">
            <td>{!! $serviceReportRecipient->email !!}</td>
            <td>{!! $serviceReportRecipient->active !!}</td>
            <td>{!! $serviceReportRecipient->Receives_admin !!}</td>
            <td>{!! $serviceReportRecipient->Receives_director !!}</td>
            {{--<td>{!! $serviceReportRecipient->created_by !!}</td>--}}
            {{--<td>{!! $serviceReportRecipient->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>