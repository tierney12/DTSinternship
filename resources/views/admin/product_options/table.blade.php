<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Name</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($productOptions as $productOption)
        <tr class="clickable"
            data-url="{{ route('product-options.show', $productOption) }}">
            <td>{!! $productOption->name !!}</td>
            {{--<td>{!! $productOption->created_by !!}</td>--}}
            {{--<td>{!! $productOption->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>