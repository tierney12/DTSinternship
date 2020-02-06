<!-- Dentist Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dentist_id', 'Dentist') !!}
    <select name="dentist_id" id="dentist_id" class="form-control chosen-select" data-placeholder="Select a Dentist">
     	<option></option>
        <option class="fly-add-option">Add a Dentist</option>
     	@foreach($dentists as $id => $name)
     		<option value="{{ $id }}" {{ isset($serviceReport) && $serviceReport->dentist_id == $id ? 'selected' : '' }}>{{ $name }}</option>
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

<!-- Job Field -->
<div class="form-group col-sm-6">
    {!! Form::label('job_id', 'Job') !!}
    <select name="job_id" id="job_id" class="form-control chosen-select" data-placeholder="Select a Job">
     	<option></option>
        <option class="fly-add-option">Add a Job</option>
     	@foreach($jobs as $id => $name)
     		<option value="{{ $id }}" {{ isset($serviceReport) && $serviceReport->job_id == $id ? 'selected' : '' }}>{{ $name }}</option>
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

<!-- Description Field -->
<div class="col-sm-12 col-lg-12">
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control"
        >{!! isset($serviceReport) ? $serviceReport->description : old('description') !!}</textarea>
    </div>
</div>

<!-- Service Report Issue Field -->
<div class="form-group col-sm-6">
    {!! Form::label('service_report_issue_id', 'Service Report Issue') !!}
    <select name="service_report_issue_id" id="service_report_issue_id" class="form-control chosen-select" data-placeholder="Select a Service Report Issue">
     	<option></option>
        <option class="fly-add-option">Add a Service Report Issue</option>
     	@foreach($serviceReportIssues as $id => $name)
     		<option value="{{ $id }}" {{ isset($serviceReport) && $serviceReport->service_report_issue_id == $id ? 'selected' : '' }}>{{ $name }}</option>
     	@endforeach
    </select>
    <input
        data-role="fly-add"
        data-target="#service_report_issue_id"
        data-source="{{ route('service-report-issues.create') }}"
        data-on-success="addNewOption"
        type="button"
        class="btn btn-success btn-xs fly-add hidden"
        value="Add New">
</div>

<!-- Root Cause Field -->
<div class="col-sm-12 col-lg-12">
    <div class="form-group">
        <label for="root_cause">Root Cause</label>
        <textarea name="root_cause" id="root_cause" class="form-control"
        >{!! isset($serviceReport) ? $serviceReport->root_cause : old('root_cause') !!}</textarea>
    </div>
</div>

<!-- Resolution Field -->
<div class="col-sm-12 col-lg-12">
    <div class="form-group">
        <label for="resolution">Resolution</label>
        <textarea name="resolution" id="resolution" class="form-control"
        >{!! isset($serviceReport) ? $serviceReport->resolution : old('resolution') !!}</textarea>
    </div>
</div>

<!-- Tech Resolution Field -->
<div class="col-sm-12 col-lg-12">
    <div class="form-group">
        <label for="tech_resolution">Tech Resolution</label>
        <textarea name="tech_resolution" id="tech_resolution" class="form-control"
        >{!! isset($serviceReport) ? $serviceReport->tech_resolution : old('tech_resolution') !!}</textarea>
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('tech_ref') ? ' has-error' : '' }}">
        <label for="tech_ref">Tech Ref</label>
        <input name="tech_ref" id="tech_ref" class="form-control"
               value="{{ isset($serviceReport) ? $serviceReport->tech_ref : old('tech_ref') }}">
        @if ($errors->has('tech_ref'))
            <small class="help-block">{{ $errors->first('tech_ref') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('cancelling_tech_ref') ? ' has-error' : '' }}">
        <label for="cancelling_tech_ref">Cancelling Tech Ref</label>
        <input name="cancelling_tech_ref" id="cancelling_tech_ref" class="form-control"
               value="{{ isset($serviceReport) ? $serviceReport->cancelling_tech_ref : old('cancelling_tech_ref') }}">
        @if ($errors->has('cancelling_tech_ref'))
            <small class="help-block">{{ $errors->first('cancelling_tech_ref') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('report_to') ? ' has-error' : '' }}">
        <label for="report_to">Report To</label>
        <input name="report_to" id="report_to" class="form-control"
               value="{{ isset($serviceReport) ? $serviceReport->report_to : old('report_to') }}">
        @if ($errors->has('report_to'))
            <small class="help-block">{{ $errors->first('report_to') }}</small>
        @endif
    </div>
</div>

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('created_by') ? ' has-error' : '' }}">--}}
        {{--<label for="created_by">Created By</label>--}}
        {{--<input name="created_by" id="created_by" class="form-control"--}}
               {{--value="{{ isset($serviceReport) ? $serviceReport->created_by : old('created_by') }}">--}}
        {{--@if ($errors->has('created_by'))--}}
            {{--<small class="help-block">{{ $errors->first('created_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('updated_by') ? ' has-error' : '' }}">--}}
        {{--<label for="updated_by">Updated By</label>--}}
        {{--<input name="updated_by" id="updated_by" class="form-control"--}}
               {{--value="{{ isset($serviceReport) ? $serviceReport->updated_by : old('updated_by') }}">--}}
        {{--@if ($errors->has('updated_by'))--}}
            {{--<small class="help-block">{{ $errors->first('updated_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}