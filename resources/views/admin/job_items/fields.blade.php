<!-- Job Field -->
<div class="form-group col-sm-6">
    {!! Form::label('job_id', 'Job') !!}
    <select name="job_id" id="job_id" class="form-control chosen-select" data-placeholder="Select a Job">
     	<option></option>
        <option class="fly-add-option">Add a Job</option>
     	@foreach($jobs as $id => $name)
     		<option value="{{ $id }}" {{ isset($jobItem) && $jobItem->job_id == $id ? 'selected' : '' }}>{{ $name }}</option>
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

<!-- Products Field -->
<div class="form-group col-sm-6">
    {!! Form::label('products_id', 'Products') !!}
    <select name="products_id" id="products_id" class="form-control chosen-select" data-placeholder="Select a Products">
     	<option></option>
        <option class="fly-add-option">Add a Products</option>
     	@foreach($products as $id => $name)
     		<option value="{{ $id }}" {{ isset($jobItem) && $jobItem->products_id == $id ? 'selected' : '' }}>{{ $name }}</option>
     	@endforeach
    </select>
    <input
        data-role="fly-add"
        data-target="#products_id"
        data-source="{{ route('products.create') }}"
        data-on-success="addNewOption"
        type="button"
        class="btn btn-success btn-xs fly-add hidden"
        value="Add New">
</div>

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('created_by') ? ' has-error' : '' }}">--}}
        {{--<label for="created_by">Created By</label>--}}
        {{--<input name="created_by" id="created_by" class="form-control"--}}
               {{--value="{{ isset($jobItem) ? $jobItem->created_by : old('created_by') }}">--}}
        {{--@if ($errors->has('created_by'))--}}
            {{--<small class="help-block">{{ $errors->first('created_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('updated_by') ? ' has-error' : '' }}">--}}
        {{--<label for="updated_by">Updated By</label>--}}
        {{--<input name="updated_by" id="updated_by" class="form-control"--}}
               {{--value="{{ isset($jobItem) ? $jobItem->updated_by : old('updated_by') }}">--}}
        {{--@if ($errors->has('updated_by'))--}}
            {{--<small class="help-block">{{ $errors->first('updated_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}