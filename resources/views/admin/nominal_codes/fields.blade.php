<div class="col-sm-6">
    <div class="form-group {{ $errors->has('nominal_codes') ? ' has-error' : '' }}">
        <label for="nominal_codes">Nominal Codes</label>
        <input name="nominal_codes" id="nominal_codes" class="form-control"
               value="{{ isset($nominalCode) ? $nominalCode->nominal_codes : old('nominal_codes') }}">
        @if ($errors->has('nominal_codes'))
            <small class="help-block">{{ $errors->first('nominal_codes') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
        <label for="description">Description</label>
        <input name="description" id="description" class="form-control"
               value="{{ isset($nominalCode) ? $nominalCode->description : old('description') }}">
        @if ($errors->has('description'))
            <small class="help-block">{{ $errors->first('description') }}</small>
        @endif
    </div>
</div>

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('created_by') ? ' has-error' : '' }}">--}}
        {{--<label for="created_by">Created By</label>--}}
        {{--<input name="created_by" id="created_by" class="form-control"--}}
               {{--value="{{ isset($nominalCode) ? $nominalCode->created_by : old('created_by') }}">--}}
        {{--@if ($errors->has('created_by'))--}}
            {{--<small class="help-block">{{ $errors->first('created_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('updated_by') ? ' has-error' : '' }}">--}}
        {{--<label for="updated_by">Updated By</label>--}}
        {{--<input name="updated_by" id="updated_by" class="form-control"--}}
               {{--value="{{ isset($nominalCode) ? $nominalCode->updated_by : old('updated_by') }}">--}}
        {{--@if ($errors->has('updated_by'))--}}
            {{--<small class="help-block">{{ $errors->first('updated_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}