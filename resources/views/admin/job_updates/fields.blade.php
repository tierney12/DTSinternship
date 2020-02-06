<!-- Job Field -->
<div class="form-group col-sm-6">
    {!! Form::label('job_id', 'Job') !!}
    <select name="job_id" id="job_id" class="form-control chosen-select" data-placeholder="Select a Job">
     	<option></option>
        <option class="fly-add-option">Add a Job</option>
     	@foreach($jobs as $id => $name)
     		<option value="{{ $id }}" {{ isset($jobUpdate) && $jobUpdate->job_id == $id ? 'selected' : '' }}>{{ $name }}</option>
     	@endforeach
    </select>
    <input
        data-role="fly-add"
        data-target="#job_id"
        data-source="{{ route('jobs.create') }}"
        data-on-success="addNewOption"
        type="button"
        class="btn btn-success btn-xs fly-add hidden"
        value="Add New">
</div>

<!-- Job Update Item Field -->
<div class="form-group col-sm-6">
    {!! Form::label('job_update_item_id', 'Job Update Item') !!}
    <select name="job_update_item_id" id="job_update_item_id" class="form-control chosen-select" data-placeholder="Select a Job Update Item">
     	<option></option>
        <option class="fly-add-option">Add a Job Update Item</option>
     	@foreach($jobUpdateItems as $id => $name)
     		<option value="{{ $id }}" {{ isset($jobUpdate) && $jobUpdate->job_update_item_id == $id ? 'selected' : '' }}>{{ $name }}</option>
     	@endforeach
    </select>
    <input
        data-role="fly-add"
        data-target="#job_update_item_id"
        data-source="{{ route('job-update-items.create') }}"
        data-on-success="addNewOption"
        type="button"
        class="btn btn-success btn-xs fly-add hidden"
        value="Add New">
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('technician_ref') ? ' has-error' : '' }}">
        <label for="technician_ref">Technician Ref</label>
        <input name="technician_ref" id="technician_ref" class="form-control"
               value="{{ isset($jobUpdate) ? $jobUpdate->technician_ref : old('technician_ref') }}">
        @if ($errors->has('technician_ref'))
            <small class="help-block">{{ $errors->first('technician_ref') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('units') ? ' has-error' : '' }}">
        <label for="units">Units</label>
        <input name="units" id="units" class="form-control"
               value="{{ isset($jobUpdate) ? $jobUpdate->units : old('units') }}">
        @if ($errors->has('units'))
            <small class="help-block">{{ $errors->first('units') }}</small>
        @endif
    </div>
</div>

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('created_by') ? ' has-error' : '' }}">--}}
        {{--<label for="created_by">Created By</label>--}}
        {{--<input name="created_by" id="created_by" class="form-control"--}}
               {{--value="{{ isset($jobUpdate) ? $jobUpdate->created_by : old('created_by') }}">--}}
        {{--@if ($errors->has('created_by'))--}}
            {{--<small class="help-block">{{ $errors->first('created_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('updated_by') ? ' has-error' : '' }}">--}}
        {{--<label for="updated_by">Updated By</label>--}}
        {{--<input name="updated_by" id="updated_by" class="form-control"--}}
               {{--value="{{ isset($jobUpdate) ? $jobUpdate->updated_by : old('updated_by') }}">--}}
        {{--@if ($errors->has('updated_by'))--}}
            {{--<small class="help-block">{{ $errors->first('updated_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}