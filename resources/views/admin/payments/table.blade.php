<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Transaction</th>
        <th>Practice</th>
        <th>Amount</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($payments as $payment)
        <tr class="clickable"
            data-url="{{ route('payments.show', $payment) }}">
            <td>{!! $payment->transaction->name !!}</td>
            <td>{!! $payment->practice->name !!}</td>
            <td>{!! $payment->amount !!}</td>
            {{--<td>{!! $payment->created_by !!}</td>--}}
            {{--<td>{!! $payment->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>