<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Name</th>
        <th>Description</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($mailingLists as $mailingList)
        <tr class="clickable"
            data-url="{{ route('mailing-lists.show', $mailingList) }}">
            <td>{!! $mailingList->name !!}</td>
            <td>{!! $mailingList->description !!}</td>
            {{--<td>{!! $mailingList->created_by !!}</td>--}}
            {{--<td>{!! $mailingList->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>