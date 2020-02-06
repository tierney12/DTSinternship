<div class="col-sm-6">
    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name">Name</label>
        <input name="name" id="name" class="form-control"
               value="{{ isset($permission) ? $permission->name : old('name') }}">
        @if ($errors->has('name'))
            <small class="help-block">{{ $errors->first('name') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('slug') ? ' has-error' : '' }}">
        <label for="slug">Slug</label>
        <input name="slug" id="slug" class="form-control"
               value="{{ isset($permission) ? $permission->slug : old('slug') }}">
        @if ($errors->has('slug'))
            <small class="help-block">{{ $errors->first('slug') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
        <label for="description">Description</label>
        <input name="description" id="description" class="form-control"
               value="{{ isset($permission) ? $permission->description : old('description') }}">
        @if ($errors->has('description'))
            <small class="help-block">{{ $errors->first('description') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('model') ? ' has-error' : '' }}">
        <label for="model">Model</label>
        <input name="model" id="model" class="form-control"
               value="{{ isset($permission) ? $permission->model : old('model') }}">
        @if ($errors->has('model'))
            <small class="help-block">{{ $errors->first('model') }}</small>
        @endif
    </div>
</div>