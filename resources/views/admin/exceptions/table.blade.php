<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Name</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($exceptions as $priceband)
        <tr class="clickable"
            data-url="{{ route('exceptions.show', $priceband) }}">
            <td>{!! $priceband->name !!}</td>
            {{--<td>{!! $priceband->created_by !!}</td>--}}
            {{--<td>{!! $priceband->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>