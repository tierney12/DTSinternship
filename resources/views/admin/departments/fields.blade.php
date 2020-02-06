<div class="col-sm-6">
    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name">Name</label>
        <input name="name" id="name" class="form-control"
               value="{{ isset($department) ? $department->name : old('name') }}">
        @if ($errors->has('name'))
            <small class="help-block">{{ $errors->first('name') }}</small>
        @endif
    </div>
</div>

<!-- Checklist Field -->
<div class="form-group col-sm-6">
    {!! Form::label('checklist_id', 'Checklist') !!}
    <select name="checklist_id" id="checklist_id" class="form-control chosen-select" data-placeholder="Select a Checklist">
     	<option></option>
        <option class="fly-add-option">Add a Checklist</option>
     	@foreach($checklists as $id => $name)
     		<option value="{{ $id }}" {{ isset($department) && $department->checklist_id == $id ? 'selected' : '' }}>{{ $name }}</option>
     	@endforeach
    </select>
    <input
        data-role="fly-add"
        data-target="#checklist_id"
        data-source="{{ route('checklists.create') }}"
        data-on-success="addNewOption"
        type="button"
        class="btn btn-success btn-xs fly-add hidden"
        value="Add New">
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="crown_bridge_work" value="0">
            <input id="crown_bridge_work"
                   type="checkbox"
                   name="crown_bridge_work"
                   value="1" {{ isset($department) ? ($department->crown_bridge_work ? 'checked' : '') : '' }}>
            <label for="crown_bridge_work">Crown Bridge Work</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="pros_work" value="0">
            <input id="pros_work"
                   type="checkbox"
                   name="pros_work"
                   value="1" {{ isset($department) ? ($department->pros_work ? 'checked' : '') : '' }}>
            <label for="pros_work">Pros Work</label>
        </div>
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('created_by') ? ' has-error' : '' }}">
        <label for="created_by">Created By</label>
        <input name="created_by" id="created_by" class="form-control"
               value="{{ isset($department) ? $department->created_by : old('created_by') }}">
        @if ($errors->has('created_by'))
            <small class="help-block">{{ $errors->first('created_by') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('updated_by') ? ' has-error' : '' }}">
        <label for="updated_by">Updated By</label>
        <input name="updated_by" id="updated_by" class="form-control"
               value="{{ isset($department) ? $department->updated_by : old('updated_by') }}">
        @if ($errors->has('updated_by'))
            <small class="help-block">{{ $errors->first('updated_by') }}</small>
        @endif
    </div>
</div>