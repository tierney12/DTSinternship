<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Name</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($discounts as $discount)
        <tr class="clickable"
            data-url="{{ route('discounts.show', $discount) }}">
            <td>{!! $discount->name !!}</td>
            {{--<td>{!! $discount->created_by !!}</td>--}}
            {{--<td>{!! $discount->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>