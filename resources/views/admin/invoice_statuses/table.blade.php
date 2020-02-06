<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Name</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($invoiceStatuses as $invoiceStatus)
        <tr class="clickable"
            data-url="{{ route('invoice-statuses.show', $invoiceStatus) }}">
            <td>{!! $invoiceStatus->name !!}</td>
            {{--<td>{!! $invoiceStatus->created_by !!}</td>--}}
            {{--<td>{!! $invoiceStatus->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>