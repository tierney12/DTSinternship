<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Description</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($serviceReportRecipientDescriptions as $serviceReportRecipientDescription)
        <tr class="clickable"
            data-url="{{ route('service-report-recipient-descriptions.show', $serviceReportRecipientDescription) }}">
            <td>{!! $serviceReportRecipientDescription->description !!}</td>
            {{--<td>{!! $serviceReportRecipientDescription->created_by !!}</td>--}}
            {{--<td>{!! $serviceReportRecipientDescription->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>