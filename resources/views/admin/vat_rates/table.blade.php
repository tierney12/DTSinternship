<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Name</th>
        <th>Rate</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($vatRates as $vatRate)
        <tr class="clickable"
            data-url="{{ route('vat-rates.show', $vatRate) }}">
            <td>{!! $vatRate->name !!}</td>
            <td>{!! $vatRate->rate !!}</td>
            {{--<td>{!! $vatRate->created_by !!}</td>--}}
            {{--<td>{!! $vatRate->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>