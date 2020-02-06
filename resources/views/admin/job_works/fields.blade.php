<!-- Job Field -->
<div class="form-group col-sm-6">
    {!! Form::label('job_id', 'Job') !!}
    <select name="job_id" id="job_id" class="form-control chosen-select" data-placeholder="Select a Job">
     	<option></option>
        <option class="fly-add-option">Add a Job</option>
     	@foreach($jobs as $id => $name)
     		<option value="{{ $id }}" {{ isset($jobWork) && $jobWork->job_id == $id ? 'selected' : '' }}>{{ $name }}</option>
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

<!-- Pros Work Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pros_work_id', 'Pros Work') !!}
    <select name="pros_work_id" id="pros_work_id" class="form-control chosen-select" data-placeholder="Select a Pros Work">
     	<option></option>
        <option class="fly-add-option">Add a Pros Work</option>
     	@foreach($prosWorks as $id => $name)
     		<option value="{{ $id }}" {{ isset($jobWork) && $jobWork->pros_work_id == $id ? 'selected' : '' }}>{{ $name }}</option>
     	@endforeach
    </select>
    <input
        data-role="fly-add"
        data-target="#pros_work_id"
        data-source="{{ route('pros-works.create') }}"
        data-on-success="addNewOption"
        type="button"
        class="btn btn-success btn-xs fly-add hidden"
        value="Add New">
</div>

<!-- Crown Bridge Work Field -->
<div class="form-group col-sm-6">
    {!! Form::label('crown_bridge_work_id', 'Crown Bridge Work') !!}
    <select name="crown_bridge_work_id" id="crown_bridge_work_id" class="form-control chosen-select" data-placeholder="Select a Crown Bridge Work">
     	<option></option>
        <option class="fly-add-option">Add a Crown Bridge Work</option>
     	@foreach($cb_works as $id => $name)
     		<option value="{{ $id }}" {{ isset($jobWork) && $jobWork->crown_bridge_work_id == $id ? 'selected' : '' }}>{{ $name }}</option>
     	@endforeach
    </select>
    <input
        data-role="fly-add"
        data-target="#crown_bridge_work_id"
        data-source="{{ route('crown-bridge-works.create') }}"
        data-on-success="addNewOption"
        type="button"
        class="btn btn-success btn-xs fly-add hidden"
        value="Add New">
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('created_by') ? ' has-error' : '' }}">
        <label for="created_by">Created By</label>
        <input name="created_by" id="created_by" class="form-control"
               value="{{ isset($jobWork) ? $jobWork->created_by : old('created_by') }}">
        @if ($errors->has('created_by'))
            <small class="help-block">{{ $errors->first('created_by') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('updated_by') ? ' has-error' : '' }}">
        <label for="updated_by">Updated By</label>
        <input name="updated_by" id="updated_by" class="form-control"
               value="{{ isset($jobWork) ? $jobWork->updated_by : old('updated_by') }}">
        @if ($errors->has('updated_by'))
            <small class="help-block">{{ $errors->first('updated_by') }}</small>
        @endif
    </div>
</div>