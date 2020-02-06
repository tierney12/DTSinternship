<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Name</th>
        <th>Mimetype</th>
        <th>Filesize</th>
        <th>Filename</th>
        {{--<th>Created By</th>--}}
        {{--<th>Updated By</th>--}}
        </tr>
    </thead>
    <tbody>
    @foreach($documents as $document)
        <tr class="clickable"
            data-url="{{ route('documents.show', $document) }}">
            <td>{!! $document->name !!}</td>
            <td>{!! $document->mimetype !!}</td>
            <td>{!! $document->filesize !!}</td>
            <td>{!! $document->filename !!}</td>
            {{--<td>{!! $document->created_by !!}</td>--}}
            {{--<td>{!! $document->updated_by !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>