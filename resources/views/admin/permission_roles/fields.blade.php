<!-- Permission Field -->
<div class="form-group col-sm-6">
    {!! Form::label('permission_id', 'Permission') !!}
    <select name="permission_id" id="permission_id" class="form-control chosen-select" data-placeholder="Select a Permission">
     	<option></option>
        <option class="fly-add-option">Add a Permission</option>
     	@foreach($permissions as $id => $name)
     		<option value="{{ $id }}" {{ isset($permissionRole) && $permissionRole->permission_id == $id ? 'selected' : '' }}>{{ $name }}</option>
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

<!-- Role Field -->
<div class="form-group col-sm-6">
    {!! Form::label('role_id', 'Role') !!}
    <select name="role_id" id="role_id" class="form-control chosen-select" data-placeholder="Select a Role">
     	<option></option>
        <option class="fly-add-option">Add a Role</option>
     	@foreach($roles as $id => $name)
     		<option value="{{ $id }}" {{ isset($permissionRole) && $permissionRole->role_id == $id ? 'selected' : '' }}>{{ $name }}</option>
     	@endforeach
    </select>
    <input
        data-role="fly-add"
        data-target="#role_id"
        data-source="{{ route('roles.create') }}"
        data-on-success="addNewOption"
        type="button"
        class="btn btn-success btn-xs fly-add hidden"
        value="Add New">
</div>