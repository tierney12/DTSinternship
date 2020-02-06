<div class="t-row">
    <div class="t-cell text-right">
        <strong>Id</strong>
    </div>
    <div class="t-cell">
        {!! $asset->id !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Title</strong>
    </div>
    <div class="t-cell">
        {!! $asset->title !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>File Name</strong>
    </div>
    <div class="t-cell">
        {!! $asset->file_name !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Storage Path</strong>
    </div>
    <div class="t-cell">
        {!! $asset->storage_path !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>File Size</strong>
    </div>
    <div class="t-cell">
        {!! $asset->file_size !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Asset Type</strong>
    </div>
    <div class="t-cell">
        {!! $asset->assetType->name !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Created By</strong>
    </div>
    <div class="t-cell">
        {!! $asset->created_by !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Updated By</strong>
    </div>
    <div class="t-cell">
        {!! $asset->updated_by !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Created At</strong>
    </div>
    <div class="t-cell">
        {!! $asset->created_at !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Updated At</strong>
    </div>
    <div class="t-cell">
        {!! $asset->updated_at !!}
    </div>
</div>

