<div class="col-sm-6">
    <div class="form-group {{ $errors->has('created_by') ? ' has-error' : '' }}">
        <label for="created_by">Created By</label>
        <input name="created_by" id="created_by" class="form-control"
               value="{{ isset($jobStock) ? $jobStock->created_by : old('created_by') }}">
        @if ($errors->has('created_by'))
            <small class="help-block">{{ $errors->first('created_by') }}</small>
        @endif
    </div>
</div>

<!-- Job Field -->
<div class="form-group col-sm-6">
    {!! Form::label('job_id', 'Job') !!}
    <select name="job_id" id="job_id" class="form-control chosen-select" data-placeholder="Select a Job">
     	<option></option>
        <option class="fly-add-option">Add a Job</option>
     	@foreach($jobs as $id => $name)
     		<option value="{{ $id }}" {{ isset($jobStock) && $jobStock->job_id == $id ? 'selected' : '' }}>{{ $name }}</option>
     	@endforeach
    </select>
</div>

<!-- Stock Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stock_id', 'Stock') !!}
    <select name="stock_id" id="stock_id" class="form-control chosen-select" data-placeholder="Select a Stock">
     	<option></option>
        <option class="fly-add-option">Add a Stock</option>
     	@foreach($stocks as $id => $name)
     		<option value="{{ $id }}" {{ isset($jobStock) && $jobStock->stock_id == $id ? 'selected' : '' }}>{{ $name }}</option>
     	@endforeach
    </select>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('units') ? ' has-error' : '' }}">
        <label for="units">Units</label>
        <input name="units" id="units" class="form-control"
               value="{{ isset($jobStock) ? $jobStock->units : old('units') }}">
        @if ($errors->has('units'))
            <small class="help-block">{{ $errors->first('units') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('updated_by') ? ' has-error' : '' }}">
        <label for="updated_by">Updated By</label>
        <input name="updated_by" id="updated_by" class="form-control"
               value="{{ isset($jobStock) ? $jobStock->updated_by : old('updated_by') }}">
        @if ($errors->has('updated_by'))
            <small class="help-block">{{ $errors->first('updated_by') }}</small>
        @endif
    </div>
</div>