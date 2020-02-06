<div class="col-sm-6">
    <div class="form-group {{ $errors->has('tech') ? ' has-error' : '' }}">
        <label for="tech">Tech</label>
        <input name="tech" id="tech" class="form-control"
               value="{{ isset($staff) ? $staff->tech : old('tech') }}">
        @if ($errors->has('tech'))
            <small class="help-block">{{ $errors->first('tech') }}</small>
        @endif
    </div>
</div>

<!-- User Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User') !!}
    <select name="user_id" id="user_id" class="form-control chosen-select" data-placeholder="Select a User">
     	<option></option>
        <option class="fly-add-option">Add a User</option>
     	@foreach($users as $id => $name)
     		<option value="{{ $id }}" {{ isset($staff) && $staff->user_id == $id ? 'selected' : '' }}>{{ $name }}</option>
     	@endforeach
    </select>
    {{--<input--}}
        {{--data-role="fly-add"--}}
        {{--data-target="#user_id"--}}
        {{--data-source="{{ route('users.create') }}"--}}
        {{--data-on-success="addNewOption"--}}
        {{--type="button"--}}
        {{--class="btn btn-success btn-xs fly-add hidden"--}}
        {{--value="Add New">--}}
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('surname') ? ' has-error' : '' }}">
        <label for="surname">Surname</label>
        <input name="surname" id="surname" class="form-control"
               value="{{ isset($staff) ? $staff->surname : old('surname') }}">
        @if ($errors->has('surname'))
            <small class="help-block">{{ $errors->first('surname') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('firstname') ? ' has-error' : '' }}">
        <label for="firstname">Firstname</label>
        <input name="firstname" id="firstname" class="form-control"
               value="{{ isset($staff) ? $staff->firstname : old('firstname') }}">
        @if ($errors->has('firstname'))
            <small class="help-block">{{ $errors->first('firstname') }}</small>
        @endif
    </div>
</div>

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('created_by') ? ' has-error' : '' }}">--}}
        {{--<label for="created_by">Created By</label>--}}
        {{--<input name="created_by" id="created_by" class="form-control"--}}
               {{--value="{{ isset($staff) ? $staff->created_by : old('created_by') }}">--}}
        {{--@if ($errors->has('created_by'))--}}
            {{--<small class="help-block">{{ $errors->first('created_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('updated_by') ? ' has-error' : '' }}">--}}
        {{--<label for="updated_by">Updated By</label>--}}
        {{--<input name="updated_by" id="updated_by" class="form-control"--}}
               {{--value="{{ isset($staff) ? $staff->updated_by : old('updated_by') }}">--}}
        {{--@if ($errors->has('updated_by'))--}}
            {{--<small class="help-block">{{ $errors->first('updated_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}