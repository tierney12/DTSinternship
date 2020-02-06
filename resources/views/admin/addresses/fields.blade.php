<div class="col-sm-6">
    <div class="form-group {{ $errors->has('address_line_1') ? ' has-error' : '' }}">
        <label for="address_line_1">Address Line 1</label>
        <input name="address_line_1" id="address_line_1" class="form-control"
               value="{{ isset($address) ? $address->address_line_1 : old('address_line_1') }}">
        @if ($errors->has('address_line_1'))
            <small class="help-block">{{ $errors->first('address_line_1') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('address_line_2') ? ' has-error' : '' }}">
        <label for="address_line_2">Address Line 2</label>
        <input name="address_line_2" id="address_line_2" class="form-control"
               value="{{ isset($address) ? $address->address_line_2 : old('address_line_2') }}">
        @if ($errors->has('address_line_2'))
            <small class="help-block">{{ $errors->first('address_line_2') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('town') ? ' has-error' : '' }}">
        <label for="town">Town</label>
        <input name="town" id="town" class="form-control"
               value="{{ isset($address) ? $address->town : old('town') }}">
        @if ($errors->has('town'))
            <small class="help-block">{{ $errors->first('town') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('county') ? ' has-error' : '' }}">
        <label for="county">County</label>
        <input name="county" id="county" class="form-control"
               value="{{ isset($address) ? $address->county : old('county') }}">
        @if ($errors->has('county'))
            <small class="help-block">{{ $errors->first('county') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('post_code') ? ' has-error' : '' }}">
        <label for="post_code">Post Code</label>
        <input name="post_code" id="post_code" class="form-control"
               value="{{ isset($address) ? $address->post_code : old('post_code') }}">
        @if ($errors->has('post_code'))
            <small class="help-block">{{ $errors->first('post_code') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('country') ? ' has-error' : '' }}">
        <label for="country">Country</label>
        <input name="country" id="country" class="form-control"
               value="{{ isset($address) ? $address->country : old('country') }}">
        @if ($errors->has('country'))
            <small class="help-block">{{ $errors->first('country') }}</small>
        @endif
    </div>
</div>

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('created_by') ? ' has-error' : '' }}">--}}
        {{--<label for="created_by">Created By</label>--}}
        {{--<input name="created_by" id="created_by" class="form-control"--}}
               {{--value="{{ isset($address) ? $address->created_by : old('created_by') }}">--}}
        {{--@if ($errors->has('created_by'))--}}
            {{--<small class="help-block">{{ $errors->first('created_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('updated_by') ? ' has-error' : '' }}">--}}
        {{--<label for="updated_by">Updated By</label>--}}
        {{--<input name="updated_by" id="updated_by" class="form-control"--}}
               {{--value="{{ isset($address) ? $address->updated_by : old('updated_by') }}">--}}
        {{--@if ($errors->has('updated_by'))--}}
            {{--<small class="help-block">{{ $errors->first('updated_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}