<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Nominal Codes</th>
        <th>Description</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($nominalCodes as $nominalCode)
        <tr class="clickable"
            data-url="{{ route('nominal-codes.show', $nominalCode) }}">
            <td>{!! $nominalCode->nominal_codes !!}</td>
            <td>{!! $nominalCode->description !!}</td>
            {{--<td>{!! $nominalCode->created_by !!}</td>--}}
            {{--<td>{!! $nominalCode->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>