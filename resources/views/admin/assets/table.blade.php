<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Title</th>
        <th>File Name</th>
        <th>Storage Path</th>
        <th>File Size</th>
        <th>Asset Type</th>
        <th>Created By</th>
        <th>Updated By</th>
        </tr>
    </thead>
    <tbody>
    @foreach($assets as $asset)
        <tr class="clickable"
            data-url="{{ route('assets.show', $asset) }}">
            <td>{!! $asset->title !!}</td>
            <td>{!! $asset->file_name !!}</td>
            <td>{!! $asset->storage_path !!}</td>
            <td>{!! $asset->file_size !!}</td>
            <td>{!! $asset->assetType->name !!}</td>
            <td>{!! $asset->created_by !!}</td>
            <td>{!! $asset->updated_by !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>