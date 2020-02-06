<table class="table table-hover">
    <thead>
        <tr class="text-uppercase">
            <th>Name</th>
        <th>Created By</th>
        <th>Updated By</th>
        </tr>
    </thead>
    <tbody>
    @foreach($assetTypes as $assetType)
        <tr class="clickable"
            data-url="{{ route('asset-types.show', $assetType) }}">
            <td>{!! $assetType->name !!}</td>
            <td>{!! $assetType->created_by !!}</td>
            <td>{!! $assetType->updated_by !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>