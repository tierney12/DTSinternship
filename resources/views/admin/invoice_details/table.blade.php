<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Products</th>
        <th>Invoice</th>
        <th>Amount</th>
        <th>Vat Rate</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($invoiceDetails as $invoiceDetail)
        <tr class="clickable"
            data-url="{{ route('invoice-details.show', $invoiceDetail) }}">
            <td>{!! $invoiceDetail->products->name !!}</td>
            <td>{!! $invoiceDetail->invoice->name !!}</td>
            <td>{!! $invoiceDetail->amount !!}</td>
            <td>{!! $invoiceDetail->vatRate->name !!}</td>
            {{--<td>{!! $invoiceDetail->created_by !!}</td>--}}
            {{--<td>{!! $invoiceDetail->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>