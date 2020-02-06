<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Stock</th>
        <th>Priceband</th>
        <th>Price</th>
        <th>Created By</th>
        <th>Updated By</th>
        </tr>
    </thead>
    <tbody>
    @foreach($stockPricebands as $stockPriceband)
        <tr class="clickable"
            data-url="{{ route('stock-pricebands.show', $stockPriceband) }}">
            <td>{!! $stockPriceband->stock->name !!}</td>
            <td>{!! $stockPriceband->priceband->name !!}</td>
            <td>{!! $stockPriceband->price !!}</td>
            <td>{!! $stockPriceband->created_by !!}</td>
            <td>{!! $stockPriceband->updated_by !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>