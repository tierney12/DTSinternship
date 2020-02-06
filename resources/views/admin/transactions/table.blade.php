<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Name</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($transactions as $transaction)
        <tr class="clickable"
            data-url="{{ route('transactions.show', $transaction) }}">
            <td>{!! $transaction->name !!}</td>
            {{--<td>{!! $transaction->created_by !!}</td>--}}
            {{--<td>{!! $transaction->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>