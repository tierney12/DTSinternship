<!-- Dentist Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dentist_id', 'Dentist') !!}
    <select name="dentist_id" id="dentist_id" class="form-control chosen-select" data-placeholder="Select a Dentist">
     	<option></option>
        {{--<option class="fly-add-option">Add a Dentist</option>--}}
     	@foreach($dentists as $id => $name)
     		<option value="{{ $id }}" {{ isset($job) && $job->dentist_id == $id ? 'selected' : '' }}>{{ $name }}</option>
     	@endforeach
    </select>
    <input
        data-role="fly-add"
        data-target="#dentist_id"
        data-source="{{ route('dentists.create') }}"
        data-on-success="addNewOption"
        type="button"
        class="btn btn-success btn-xs fly-add hidden"
        value="Add New">
</div>

<!-- Department Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_id', 'Department') !!}
    <select name="department_id" id="department_id" class="form-control chosen-select" data-placeholder="Select a Department">
     	<option></option>
        {{--<option class="fly-add-option">Add a Department</option>--}}
     	@foreach($departments as $id => $name)
     		<option value="{{ $id }}" {{ isset($job) && $job->department_id == $id ? 'selected' : '' }}>{{ $name }}</option>
     	@endforeach
    </select>
    <input
        data-role="fly-add"
        data-target="#department_id"
        data-source="{{ route('departments.create') }}"
        data-on-success="addNewOption"
        type="button"
        class="btn btn-success btn-xs fly-add hidden"
        value="Add New">
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('patient_name') ? ' has-error' : '' }}">
        <label for="patient_name">Patient Name</label>
        <input name="patient_name" id="patient_name" class="form-control"
               value="{{ isset($job) ? $job->patient_name : old('patient_name') }}">
        @if ($errors->has('patient_name'))
            <small class="help-block">{{ $errors->first('patient_name') }}</small>
        @endif
    </div>
</div>

<!-- Date In Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_in', 'Date In') !!}
    {!! Form::date('date_in',  isset($job) ? \Carbon\Carbon::parse($job->date_in)->format('Y-m-d') : null , ['class' => 'form-control']) !!}
</div>

<!-- Date Due Out Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_due_out', 'Date Due Out') !!}
    {!! Form::date('date_due_out',  isset($job) ? \Carbon\Carbon::parse($job->date_due_out)->format('Y-m-d') : null , ['class' => 'form-control']) !!}
</div>

<!-- Date Dispatched Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_dispatched', 'Date Despatched') !!}
    {!! Form::date('date_dispatched',  isset($job) ? \Carbon\Carbon::parse($job->date_dispatched)->format('Y-m-d') : null , ['class' => 'form-control']) !!}</div>

<!-- Special Instructions Field -->
<div class="col-sm-12 col-lg-12">
    <div class="form-group">
        <label for="special_instructions">Special Instructions</label>
        <textarea name="special_instructions" id="special_instructions" class="form-control"
        >{!! isset($job) ? $job->special_instructions : old('special_instructions') !!}</textarea>
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('shade') ? ' has-error' : '' }}">
        <label for="shade">Shade</label>
        <input name="shade" id="shade" class="form-control"
               value="{{ isset($job) ? $job->shade : old('shade') }}">
        @if ($errors->has('shade'))
            <small class="help-block">{{ $errors->first('shade') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('impressions') ? ' has-error' : '' }}">
        <label for="impressions">Impressions</label>
        <input name="impressions" id="impressions" class="form-control"
               value="{{ isset($job) ? $job->impressions : old('impressions') }}">
        @if ($errors->has('impressions'))
            <small class="help-block">{{ $errors->first('impressions') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('models') ? ' has-error' : '' }}">
        <label for="models">Models</label>
        <input name="models" id="models" class="form-control"
               value="{{ isset($job) ? $job->models : old('models') }}">
        @if ($errors->has('models'))
            <small class="help-block">{{ $errors->first('models') }}</small>
        @endif
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="estimate" value="0">
            <input id="estimate"
                   type="checkbox"
                   name="estimate"
                   value="1" {{ isset($job) ? ($job->estimate ? 'checked' : '') : '' }}>
            <label for="estimate">Estimate</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="bites" value="0">
            <input id="bites"
                   type="checkbox"
                   name="bites"
                   value="1" {{ isset($job) ? ($job->bites ? 'checked' : '') : '' }}>
            <label for="bites">Bites</label>
        </div>
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('others') ? ' has-error' : '' }}">
        <label for="others">Others</label>
        <input name="others" id="others" class="form-control"
               value="{{ isset($job) ? $job->others : old('others') }}">
        @if ($errors->has('others'))
            <small class="help-block">{{ $errors->first('others') }}</small>
        @endif
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="remake" value="0">
            <input id="remake"
                   type="checkbox"
                   name="remake"
                   value="1" {{ isset($job) ? ($job->remake ? 'checked' : '') : '' }}>
            <label for="remake">Remake</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="invoiced" value="0">
            <input id="invoiced"
                   type="checkbox"
                   name="invoiced"
                   value="1" {{ isset($job) ? ($job->invoiced ? 'checked' : '') : '' }}>
            <label for="invoiced">Invoiced</label>
        </div>
    </div>
</div>

<!-- Remake Reason Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remake_reason_id', 'Remake Reason') !!}
    <select name="remake_reason_id" id="remake_reason_id" class="form-control chosen-select" data-placeholder="Select a Remake Reason">
     	<option></option>
        {{--<option class="fly-add-option">Add a Remake Reason</option>--}}
     	@foreach($remakeReasons as $id => $name)
     		<option value="{{ $id }}" {{ isset($job) && $job->remake_reason_id == $id ? 'selected' : '' }}>{{ $name }}</option>
     	@endforeach
    </select>
    <input
        data-role="fly-add"
        data-target="#remake_reason_id"
        data-source="{{ route('remake-reasons.create') }}"
        data-on-success="addNewOption"
        type="button"
        class="btn btn-success btn-xs fly-add hidden"
        value="Add New">
</div>

<!-- Remake Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remake_date', 'Remake Date') !!}
    {!! Form::date('remake_date',  isset($job) ? \Carbon\Carbon::parse($job->remake_date)->format('Y-m-d') : null , ['class' => 'form-control']) !!}</div>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('remake_original_ref', 'Remake Original Reference') !!}
    <select name="remake_original_ref" id="remake_original_ref" class="form-control chosen-select" data-placeholder="Select a Job">
        <option></option>
        {{--<option class="fly-add-option">Add a Job</option>--}}
        @foreach($remakeOriginalRefs as $id => $name)
            <option value="{{ $id }}" {{ isset($job) && $job->remake_original_ref == $id ? 'selected' : '' }}>{{ $name }}</option>
        @endforeach
    </select>
    <input
            data-role="fly-add"
            data-target="#remake_original_ref"
            data-source="{{ route('jobs.create') }}"
            data-on-success="addNewOption"
            type="button"
            class="btn btn-success btn-xs fly-add hidden"
            value="Add New">
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('signed_for_by') ? ' has-error' : '' }}">
        <label for="signed_for_by">Signed For By</label>
        <input name="signed_for_by" id="signed_for_by" class="form-control"
               value="{{ isset($job) ? $job->signed_for_by : old('signed_for_by') }}">
        @if ($errors->has('signed_for_by'))
            <small class="help-block">{{ $errors->first('signed_for_by') }}</small>
        @endif
    </div>
</div>

<!-- Delivery Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('delivery_date', 'Delivery Date') !!}
    {!! Form::date('delivery_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Job Layout Field -->
<div class="form-group col-sm-6">
    {!! Form::label('job_layout_id', 'Job Layout') !!}
    <select name="job_layout_id" id="job_layout_id" class="form-control chosen-select hidden" data-placeholder="Select a Job Layout">
    </select>
    <option value={{App\Models\Job::max('id')+1}}></option>
    <input
            data-role="fly-add"
            data-target="#job_layout_id"
            data-source="{{ route('job-layouts.create') }}"
            data-on-success="addNewOption"
            type="button"
            class="btn btn-success btn-xs fly-add hidden"
            value="Add New">
</div>

<!-- Job Layout Field -->
<div class="form-group col-sm-6">
    {!! Form::label('job_no', 'Job Number') !!}
    <select name="job_no" id="job_no" class="form-control chosen-select hidden" data-placeholder="Select a Job Number">
    </select>
    <option value={{App\Models\Job::max('id')+1}}></option>
    <input
            data-role="fly-add"
            data-target="#job_no"
            data-source="{{ route('jobs.create') }}"
            data-on-success="addNewOption"
            type="button"
            class="btn btn-success btn-xs fly-add hidden"
            value="Add New">
</div>

<!-- Nominal Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nominal_code_id', 'Nominal Code') !!}
    <select name="nominal_code_id" id="nominal_code_id" class="form-control chosen-select" data-placeholder="Select a Nominal Code">
     	<option></option>
        <option class="fly-add-option">Add a Nominal Code</option>
     	@foreach($nominalCodes as $id => $name)
     		<option value="{{ $id }}" {{ isset($job) && $job->nominal_code_id == $id ? 'selected' : '' }}>{{ $name }}</option>
     	@endforeach
    </select>
    <input
        data-role="fly-add"
        data-target="#nominal_code_id"
        data-source="{{ route('nominal-codes.create') }}"
        data-on-success="addNewOption"
        type="button"
        class="btn btn-success btn-xs fly-add hidden"
        value="Add New">
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="price_fixed" value="0">
            <input id="price_fixed"
                   type="checkbox"
                   name="price_fixed"
                   value="1" {{ isset($job) ? ($job->price_fixed ? 'checked' : '') : '' }}>
            <label for="price_fixed">Price Fixed</label>
        </div>
    </div>
</div>

<!-- Lab Sheet Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lab_sheet_id', 'Lab Sheet') !!}
    <select name="lab_sheet_id" id="lab_sheet_id" class="form-control chosen-select" data-placeholder="Select a Lab Sheet">
     	<option></option>
        {{--<option class="fly-add-option">Add a Lab Sheet</option>--}}
     	@foreach($labSheets as $id => $name)
     		<option value="{{ $id }}" {{ isset($job) && $job->lab_sheet_id == $id ? 'selected' : '' }}>{{ $name }}</option>
     	@endforeach
    </select>
    <input
        data-role="fly-add"
        data-target="#lab_sheet_id"
        data-source="{{ route('lab-sheets.create') }}"
        data-on-success="addNewOption"
        type="button"
        class="btn btn-success btn-xs fly-add hidden"
        value="Add New">
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="input_error" value="0">
            <input id="input_error"
                   type="checkbox"
                   name="input_error"
                   value="1" {{ isset($job) ? ($job->input_error ? 'checked' : '') : '' }}>
            <label for="input_error">Input Error</label>
        </div>
    </div>
</div>

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('job_error_ref') ? ' has-error' : '' }}">--}}
        {{--<label for="job_error_ref">Job Error Ref</label>--}}
        {{--<input name="job_error_ref" id="job_error_ref" class="form-control"--}}
               {{--value="{{ isset($job) ? $job->job_error_ref : old('job_error_ref') }}">--}}
        {{--@if ($errors->has('job_error_ref'))--}}
            {{--<small class="help-block">{{ $errors->first('job_error_ref') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}

<!-- Job Error Field -->
<div class="form-group col-sm-6">
    {!! Form::label('job_error_ref', 'Job Error Reference') !!}
    <select name="job_error_ref" id="job_error_ref" class="form-control chosen-select" data-placeholder="Select a Job">
        <option></option>
        {{--<option class="fly-add-option">Add a Job</option>--}}
        @foreach($jobErrorRefs as $id => $name)
            <option value="{{ $id }}" {{ isset($job) && $job->job_error_ref== $id ? 'selected' : '' }}>{{ $name }}</option>
        @endforeach
    </select>
    <input
            data-role="fly-add"
            data-target="#job_error_ref"
            data-source="{{ route('jobs.create') }}"
            data-on-success="addNewOption"
            type="button"
            class="btn btn-success btn-xs fly-add hidden"
            value="Add New">
</div>

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('created_by') ? ' has-error' : '' }}">--}}
        {{--<label for="created_by">Created By</label>--}}
        {{--<input name="created_by" id="created_by" class="form-control"--}}
               {{--value="{{ isset($job) ? $job->created_by : old('created_by') }}">--}}
        {{--@if ($errors->has('created_by'))--}}
            {{--<small class="help-block">{{ $errors->first('created_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('updated_by') ? ' has-error' : '' }}">--}}
        {{--<label for="updated_by">Updated By</label>--}}
        {{--<input name="updated_by" id="updated_by" class="form-control"--}}
               {{--value="{{ isset($job) ? $job->updated_by : old('updated_by') }}">--}}
        {{--@if ($errors->has('updated_by'))--}}
            {{--<small class="help-block">{{ $errors->first('updated_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}