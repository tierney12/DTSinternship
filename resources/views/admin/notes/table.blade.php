<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Note Text</th>
        <th>Private</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($notes as $note)
        <tr class="clickable"
            data-url="{{ route('notes.show', $note) }}">
            <td>{!! $note->note_text !!}</td>
            <td>{!! $note->private !!}</td>
            {{--<td>{!! $note->created_by !!}</td>--}}
            {{--<td>{!! $note->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>