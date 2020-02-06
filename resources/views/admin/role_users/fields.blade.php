<!-- Role Field -->
<div class="form-group col-sm-6">
    {!! Form::label('role_id', 'Role') !!}
    <select name="role_id" id="role_id" class="form-control chosen-select" data-placeholder="Select a Role">
     	<option></option>
        <option class="fly-add-option">Add a Role</option>
     	@foreach($roles as $id => $name)
     		<option value="{{ $id }}" {{ isset($roleUser) && $roleUser->role_id == $id ? 'selected' : '' }}>{{ $name }}</option>
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

<!-- User Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User') !!}
    <select name="user_id" id="user_id" class="form-control chosen-select" data-placeholder="Select a User">
     	<option></option>
        <option class="fly-add-option">Add a User</option>
     	@foreach($users as $id => $name)
     		<option value="{{ $id }}" {{ isset($roleUser) && $roleUser->user_id == $id ? 'selected' : '' }}>{{ $name }}</option>
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