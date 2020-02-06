<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Stock Code</th>
        <th>Description</th>
        <th>Type</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr class="clickable"
            data-url="{{ route('products.show', $product) }}">
            <td>{!! $product->stock_code !!}</td>
            <td>{!! $product->description !!}</td>
            <td>{!! $product->type !!}</td>
            {{--<td>{!! $product->created_by !!}</td>--}}
            {{--<td>{!! $product->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>