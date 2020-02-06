<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Address Line 1</th>
        <th>Address Line 2</th>
        <th>Town</th>
        <th>County</th>
        <th>Post Code</th>
        <th>Country</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($addresses as $address)
        <tr class="clickable"
            data-url="{{ route('addresses.show', $address) }}">
            <td>{!! $address->address_line_1 !!}</td>
            <td>{!! $address->address_line_2 !!}</td>
            <td>{!! $address->town !!}</td>
            <td>{!! $address->county !!}</td>
            <td>{!! $address->post_code !!}</td>
            <td>{!! $address->country !!}</td>
            {{--<td>{!! $address->created_by !!}</td>--}}
            {{--<td>{!! $address->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>