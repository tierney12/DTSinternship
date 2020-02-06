<!-- Jobs Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jobs_id', 'Jobs') !!}
    <select name="jobs_id" id="jobs_id" class="form-control chosen-select" data-placeholder="Select a Jobs">
     	<option></option>
        <option class="fly-add-option">Add a Jobs</option>
     	@foreach($jobs as $id => $name)
     		<option value="{{ $id }}" {{ isset($invoice) && $invoice->jobs_id == $id ? 'selected' : '' }}>{{ $name }}</option>
     	@endforeach
    </select>
    <input
        data-role="fly-add"
        data-target="#jobs_id"
        data-source="{{ route('jobs.create') }}"
        data-on-success="addNewOption"
        type="button"
        class="btn btn-success btn-xs fly-add hidden"
        value="Add New">
</div>

<!-- Invoice Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('invoice_status_id', 'Invoice Status') !!}
    <select name="invoice_status_id" id="invoice_status_id" class="form-control chosen-select" data-placeholder="Select a Invoice Status">
     	<option></option>
        <option class="fly-add-option">Add a Invoice Status</option>
     	@foreach($invoiceStatuses as $id => $name)
     		<option value="{{ $id }}" {{ isset($invoice) && $invoice->invoice_status_id == $id ? 'selected' : '' }}>{{ $name }}</option>
     	@endforeach
    </select>
    <input
        data-role="fly-add"
        data-target="#invoice_status_id"
        data-source="{{ route('invoice-statuses.create') }}"
        data-on-success="addNewOption"
        type="button"
        class="btn btn-success btn-xs fly-add hidden"
        value="Add New">
</div>

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('created_by') ? ' has-error' : '' }}">--}}
        {{--<label for="created_by">Created By</label>--}}
        {{--<input name="created_by" id="created_by" class="form-control"--}}
               {{--value="{{ isset($invoice) ? $invoice->created_by : old('created_by') }}">--}}
        {{--@if ($errors->has('created_by'))--}}
            {{--<small class="help-block">{{ $errors->first('created_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('updated_by') ? ' has-error' : '' }}">--}}
        {{--<label for="updated_by">Updated By</label>--}}
        {{--<input name="updated_by" id="updated_by" class="form-control"--}}
               {{--value="{{ isset($invoice) ? $invoice->updated_by : old('updated_by') }}">--}}
        {{--@if ($errors->has('updated_by'))--}}
            {{--<small class="help-block">{{ $errors->first('updated_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}