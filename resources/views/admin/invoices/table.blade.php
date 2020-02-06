<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Job Number</th>
        <th>Invoice Status</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($invoices as $invoice)
        <tr class="clickable"
            data-url="{{ route('invoices.show', $invoice) }}">
            <td>{!! $invoice->job->job_no !!}</td>
            <td>{!! $invoice->invoiceStatus->name !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>