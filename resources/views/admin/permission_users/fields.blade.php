<!-- Permission Field -->
<div class="form-group col-sm-6">
    {!! Form::label('permission_id', 'Permission') !!}
    <select name="permission_id" id="permission_id" class="form-control chosen-select" data-placeholder="Select a Permission">
     	<option></option>
        <option class="fly-add-option">Add a Permission</option>
     	@foreach($permissions as $id => $name)
     		<option value="{{ $id }}" {{ isset($permissionUser) && $permissionUser->permission_id == $id ? 'selected' : '' }}>{{ $name }}</option>
     	@endforeach
    </select>
    <input
        data-role="fly-add"
        data-target="#permission_id"
        data-source="{{ route('permissions.create') }}"
        data-on-success="addNewOption"
        type="button"
        class="btn btn-success btn-xs fly-add hidden"
        value="Add New">
</div>

<!-- User Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User') !!}
    <select name="user_id" id="user_id" class="form-control chosen-select" data-placeholder="Select a User">
     	<option></option>
        <option class="fly-add-option">Add a User</option>
     	@foreach($users as $id => $name)
     		<option value="{{ $id }}" {{ isset($permissionUser) && $permissionUser->user_id == $id ? 'selected' : '' }}>{{ $name }}</option>
     	@endforeach
    </select>
    <input
        data-role="fly-add"
        data-target="#user_id"
        data-source="{{ route('users.create') }}"
        data-on-success="addNewOption"
        type="button"
        class="btn btn-success btn-xs fly-add hidden"
        value="Add New">
</div>