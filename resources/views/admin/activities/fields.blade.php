<div class="col-sm-6">
    <div class="form-group {{ $errors->has('created_by') ? ' has-error' : '' }}">
        <label for="created_by">Created By</label>
        <input name="created_by" id="created_by" class="form-control"
               value="{{ isset($activity) ? $activity->created_by : old('created_by') }}">
        @if ($errors->has('created_by'))
            <small class="help-block">{{ $errors->first('created_by') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('updated_by') ? ' has-error' : '' }}">
        <label for="updated_by">Updated By</label>
        <input name="updated_by" id="updated_by" class="form-control"
               value="{{ isset($activity) ? $activity->updated_by : old('updated_by') }}">
        @if ($errors->has('updated_by'))
            <small class="help-block">{{ $errors->first('updated_by') }}</small>
        @endif
    </div>
</div>

<!-- Dentist Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dentist_id', 'Dentist') !!}
    <select name="dentist_id" id="dentist_id" class="form-control chosen-select" data-placeholder="Select a Dentist">
     	<option></option>
        <option class="fly-add-option">Add a Dentist</option>
     	@foreach($dentists as $id => $name)
     		<option value="{{ $id }}" {{ isset($activity) && $activity->dentist_id == $id ? 'selected' : '' }}>{{ $name }}</option>
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