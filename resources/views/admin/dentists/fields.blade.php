<div class="col-sm-6">
    <div class="form-group {{ $errors->has('account_number') ? ' has-error' : '' }}">
        <label for="account_number">Account Number</label>
        <input name="account_number" id="account_number" class="form-control"
               value="{{ isset($dentist) ? $dentist->account_number : old('account_number') }}">
        @if ($errors->has('account_number'))
            <small class="help-block">{{ $errors->first('account_number') }}</small>
        @endif
    </div>
</div>

<!-- Customer Since Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_since', 'Customer Since') !!}
    {{--{!! Form::date('dentist[customer_since]', old('customer_since', (isset($dentist) ? \Carbon\Carbon::createFromFormat('d/m/Y', $dentist->customer_since) : null)), ['class' => 'form-control']) !!}--}}
    {!! Form::date('customer_since',  isset($dentist) ? \Carbon\Carbon::parse($dentist->customer_since)->format('Y-m-d') : null , ['class' => 'form-control']) !!}
{{--    {!! dd(\Carbon\Carbon::parse($dentist->customer_since)->format('d-m-Y')) !!}--}}
</div>

{{--<div class="col-sm-12">--}}
    {{--<div class="form-group {{ $errors->has('customer_since') ? ' has-error' : '' }}">--}}
        {{--<label for="customer_since"> Customer Since (Y-m-d)</label>--}}
        {{--<input name='customer_since' id="customer_since"--}}
               {{--value="{{ isset($dentist) ? $dentist->customer_since :(date(old('customer_since'))) }}" />--}}
        {{--@if ($errors->has('customer_since'))--}}
            {{--<small class="help-block">{{ $errors->first('customer_since') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="row">--}}
{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('customer_since') ? ' has-error' : '' }}">--}}
        {{--<input id="customer_since"--}}
               {{--type="date"--}}
               {{--name="active"--}}
               {{--value="{{ isset($dentist) ? (date($dentist->customer_since)) : date(old('customer_since')) }}">--}}
    {{--</div>--}}
{{--</div>--}}
{{--</div>--}}


<!-- END CUSTOMER SINCE FIELD -->

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="active" value="0">
            <input id="active"
                   type="checkbox"
                   name="active"
                   value="1" {{ isset($dentist) ? ($dentist->active ? 'checked' : '') : '' }}>
            <label for="active">Active</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="mailing_list_opt_in" value="0">
            <input id="mailing_list_opt_in"
                   type="checkbox"
                   name="mailing_list_opt_in"
                   value="1" {{ isset($dentist) ? ($dentist->mailing_list_opt_in ? 'checked' : '') : '' }}>
            <label for="mailing_list_opt_in">Mailing List Opt In</label>
        </div>
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
        <label for="title">Title</label>
        <input name="title" id="title" class="form-control"
               value="{{ isset($dentist) ? $dentist->title : old('title') }}">
        @if ($errors->has('title'))
            <small class="help-block">{{ $errors->first('title') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('firstname') ? ' has-error' : '' }}">
        <label for="firstname">Firstname</label>
        <input name="firstname" id="firstname" class="form-control"
               value="{{ isset($dentist) ? $dentist->firstname : old('firstname') }}">
        @if ($errors->has('firstname'))
            <small class="help-block">{{ $errors->first('firstname') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('surname') ? ' has-error' : '' }}">
        <label for="surname">Surname</label>
        <input name="surname" id="surname" class="form-control"
               value="{{ isset($dentist) ? $dentist->surname : old('surname') }}">
        @if ($errors->has('surname'))
            <small class="help-block">{{ $errors->first('surname') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('phone_number') ? ' has-error' : '' }}">
        <label for="phone_number">Phone Number</label>
        <input name="phone_number" id="phone_number" class="form-control"
               value="{{ isset($dentist) ? $dentist->phone_number : old('phone_number') }}">
        @if ($errors->has('phone_number'))
            <small class="help-block">{{ $errors->first('phone_number') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('mobile_number') ? ' has-error' : '' }}">
        <label for="mobile_number">Mobile Number</label>
        <input name="mobile_number" id="mobile_number" class="form-control"
               value="{{ isset($dentist) ? $dentist->mobile_number : old('mobile_number') }}">
        @if ($errors->has('mobile_number'))
            <small class="help-block">{{ $errors->first('mobile_number') }}</small>
        @endif
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="vocational_training" value="0">
            <input id="vocational_training"
                   type="checkbox"
                   name="vocational_training"
                   value="1" {{ isset($dentist) ? ($dentist->vocational_training ? 'checked' : '') : '' }}>
            <label for="vocational_training">Vocational Training</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="essential_account" value="0">
            <input id="essential_account"
                   type="checkbox"
                   name="essential_account"
                   value="1" {{ isset($dentist) ? ($dentist->essential_account ? 'checked' : '') : '' }}>
            <label for="essential_account">Essential Account</label>
        </div>
    </div>
</div>

<!-- Preferences Field -->
<div class="col-sm-12 col-lg-12">
    <div class="form-group">
        <label for="preferences">Preferences</label>
        <textarea name="preferences" id="preferences" class="form-control"
        >{!! isset($dentist) ? $dentist->preferences : old('preferences') !!}</textarea>
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('recall_month') ? ' has-error' : '' }}">
        <label for="recall_month">Recall Month</label>
        <input name="recall_month" id="recall_month" class="form-control"
               value="{{ isset($dentist) ? $dentist->recall_month : old('recall_month') }}">
        @if ($errors->has('recall_month'))
            <small class="help-block">{{ $errors->first('recall_month') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email">E-mail</label>
        <input name="email" id="email" class="form-control"
               value="{{ isset($dentist) ? $dentist->email : old('email') }}">
        @if ($errors->has('gdc_number'))
            <small class="help-block">{{ $errors->first('email') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('gdc_number') ? ' has-error' : '' }}">
        <label for="gdc_number">Gdc Number</label>
        <input name="gdc_number" id="gdc_number" class="form-control"
               value="{{ isset($dentist) ? $dentist->gdc_number : old('gdc_number') }}">
        @if ($errors->has('gdc_number'))
            <small class="help-block">{{ $errors->first('gdc_number') }}</small>
        @endif
    </div>
</div>

<!-- Practice Field -->
<div class="form-group col-sm-6">
    {!! Form::label('practice_id', 'Practice') !!}
    <select name="practice_id" id="practice_id" class="form-control chosen-select" data-placeholder="Select a Practice">
     	<option></option>
        {{--<option class="fly-add-option"></option>--}}
     	@foreach($practices as $id => $name)
            <option value="{{ $id }}" {{ isset($dentist) && $dentist->practice_id == $id ? 'selected' : '' }}>{{ $name }}</option>
        @endforeach
    </select>
    <input
        data-role="fly-add"
        data-target="#practice_id"
        data-source="{{ route('practices.create') }}"
        data-on-success="addNewOption"
        type="button"
        class="btn btn-success btn-xs fly-add hidden"
        value="Add New">
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address_id', 'Address') !!}
    <select name="address_id" id="address_id" class="form-control chosen-select" data-placeholder="Select a Address">
     	<option></option>
        {{--<option class="fly-add-option">Add a Address</option>--}}
     	@foreach($addresses as $id => $name)
     		<option value="{{ $id }}" {{ isset($dentist) && $dentist->address_id == $id ? 'selected' : '' }}>{{ $name }}</option>
     	@endforeach
    </select>
    <input
        data-role="fly-add"
        data-target="#address_id"
        data-source="{{ route('addresses.create') }}"
        data-on-success="addNewOption"
        type="button"
        class="btn btn-success btn-xs fly-add hidden"
        value="Add New">
</div>

<!-- Area Field -->
<div class="form-group col-sm-6">
    {!! Form::label('area_id', 'Area') !!}
    <select name="area_id" id="area_id" class="form-control chosen-select" data-placeholder="Select a Area">
     	<option></option>
        {{--<option class="fly-add-option">Add a Area</option>--}}
     	@foreach($areas as $id => $name)
     		<option value="{{ $id }}" {{ isset($dentist) && $dentist->area_id == $id ? 'selected' : '' }}>{{ $name }}</option>
     	@endforeach
    </select>
    <input
        data-role="fly-add"
        data-target="#area_id"
        data-source="{{ route('areas.create') }}"
        data-on-success="addNewOption"
        type="button"
        class="btn btn-success btn-xs fly-add hidden"
        value="Add New">
</div>

<!-- Dentist Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dentist_status_id', 'Dentist Status') !!}
    <select name="dentist_status_id" id="dentist_status_id" class="form-control chosen-select" data-placeholder="Select a Dentist Status">
     	<option></option>
        {{--<option class="fly-add-option">Add a Dentist Status</option>--}}
     	@foreach($dentistStatuses as $id => $name)
     		<option value="{{ $id }}" {{ isset($dentist) && $dentist->dentist_status_id == $id ? 'selected' : '' }}>{{ $name }}</option>
     	@endforeach
    </select>
    <input
        data-role="fly-add"
        data-target="#dentist_status_id"
        data-source="{{ route('dentist-statuses.create') }}"
        data-on-success="addNewOption"
        type="button"
        class="btn btn-success btn-xs fly-add hidden"
        value="Add New">
</div>

<!-- Priceband Field -->
<div class="form-group col-sm-6">
    {!! Form::label('priceband_id', 'Priceband') !!}
    <select name="priceband_id" id="priceband_id" class="form-control chosen-select" data-placeholder="Select a Priceband">
        <option value=""></option>
        @foreach($pricebands as $id => $name)
     		<option value="{{ $id }}" {{ isset($dentist) && $dentist->priceband_id == $id ? 'selected' : '' }}>{{ $name }}</option>
     	@endforeach
    </select>
</div>

<!-- Priceband Exception Field -->
<div class="form-group col-sm-6">
    {!! Form::label('exception', 'Priceband Exceptions') !!}
    <select name="exception" id="exception" class="form-control chosen-select" data-placeholder="Select Exceptions">
        <option value=""></option>
        @foreach($exceptions as $id => $name)
            <option value="{{ $id }}" {{ isset($dentist) && $dentist->exception == $id ? 'selected' : '' }}>{{ $name }}</option>
        @endforeach
    </select>
</div>

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('created_by') ? ' has-error' : '' }}">--}}
        {{--<label for="created_by">Created By</label>--}}
        {{--<input name="created_by" id="created_by" class="form-control"--}}
               {{--value="{{ isset($dentist) ? $dentist->created_by : old('created_by') }}">--}}
        {{--@if ($errors->has('created_by'))--}}
            {{--<small class="help-block">{{ $errors->first('created_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('updated_by') ? ' has-error' : '' }}">--}}
        {{--<label for="updated_by">Updated By</label>--}}
        {{--<input name="updated_by" id="updated_by" class="form-control"--}}
               {{--value="{{ isset($dentist) ? $dentist->updated_by : old('updated_by') }}">--}}
        {{--@if ($errors->has('updated_by'))--}}
            {{--<small class="help-block">{{ $errors->first('updated_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}