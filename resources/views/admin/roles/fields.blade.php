<div class="col-sm-6">
    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name">Name</label>
        <input name="name" id="name" class="form-control"
               value="{{ isset($role) ? $role->name : old('name') }}">
        @if ($errors->has('name'))
            <small class="help-block">{{ $errors->first('name') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('slug') ? ' has-error' : '' }}">
        <label for="slug">Slug</label>
        <input name="slug" id="slug" class="form-control"
               value="{{ isset($role) ? $role->slug : old('slug') }}">
        @if ($errors->has('slug'))
            <small class="help-block">{{ $errors->first('slug') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
        <label for="description">Description</label>
        <input name="description" id="description" class="form-control"
               value="{{ isset($role) ? $role->description : old('description') }}">
        @if ($errors->has('description'))
            <small class="help-block">{{ $errors->first('description') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('level') ? ' has-error' : '' }}">
        <label for="level">Level</label>
        <input name="level" id="level" class="form-control"
               value="{{ isset($role) ? $role->level : old('level') }}">
        @if ($errors->has('level'))
            <small class="help-block">{{ $errors->first('level') }}</small>
        @endif
    </div>
</div>