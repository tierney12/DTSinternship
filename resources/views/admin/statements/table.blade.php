<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Name</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($statements as $statement)
        <tr class="clickable"
            data-url="{{ route('statements.show', $statement) }}">
            <td>{!! $statement->name !!}</td>
            {{--<td>{!! $statement->created_by !!}</td>--}}
            {{--<td>{!! $statement->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>