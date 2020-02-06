<div class="col-sm-6">
    <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
        <label for="title">Title</label>
        <input name="title" id="title" class="form-control"
               value="{{ isset($asset) ? $asset->title : old('title') }}">
        @if ($errors->has('title'))
            <small class="help-block">{{ $errors->first('title') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('file_name') ? ' has-error' : '' }}">
        <label for="file_name">File Name</label>
        <input name="file_name" id="file_name" class="form-control"
               value="{{ isset($asset) ? $asset->file_name : old('file_name') }}">
        @if ($errors->has('file_name'))
            <small class="help-block">{{ $errors->first('file_name') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('storage_path') ? ' has-error' : '' }}">
        <label for="storage_path">Storage Path</label>
        <input name="storage_path" id="storage_path" class="form-control"
               value="{{ isset($asset) ? $asset->storage_path : old('storage_path') }}">
        @if ($errors->has('storage_path'))
            <small class="help-block">{{ $errors->first('storage_path') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('file_size') ? ' has-error' : '' }}">
        <label for="file_size">File Size</label>
        <input name="file_size" id="file_size" class="form-control"
               value="{{ isset($asset) ? $asset->file_size : old('file_size') }}">
        @if ($errors->has('file_size'))
            <small class="help-block">{{ $errors->first('file_size') }}</small>
        @endif
    </div>
</div>

<!-- Asset Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('asset_type_id', 'Asset Type') !!}
    <select name="asset_type_id" id="asset_type_id" class="form-control chosen-select" data-placeholder="Select a Asset Type">
     	<option></option>
        <option class="fly-add-option">Add a Asset Type</option>
     	@foreach($assetTypes as $id => $name)
     		<option value="{{ $id }}" {{ isset($asset) && $asset->asset_type_id == $id ? 'selected' : '' }}>{{ $name }}</option>
     	@endforeach
    </select>
    <input
        data-role="fly-add"
        data-target="#asset_type_id"
        data-source="{{ route('asset-types.create') }}"
        data-on-success="addNewOption"
        type="button"
        class="btn btn-success btn-xs fly-add hidden"
        value="Add New">
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('created_by') ? ' has-error' : '' }}">
        <label for="created_by">Created By</label>
        <input name="created_by" id="created_by" class="form-control"
               value="{{ isset($asset) ? $asset->created_by : old('created_by') }}">
        @if ($errors->has('created_by'))
            <small class="help-block">{{ $errors->first('created_by') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('updated_by') ? ' has-error' : '' }}">
        <label for="updated_by">Updated By</label>
        <input name="updated_by" id="updated_by" class="form-control"
               value="{{ isset($asset) ? $asset->updated_by : old('updated_by') }}">
        @if ($errors->has('updated_by'))
            <small class="help-block">{{ $errors->first('updated_by') }}</small>
        @endif
    </div>
</div>