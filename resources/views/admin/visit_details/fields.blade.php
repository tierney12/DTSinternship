<!-- Visit Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('visit_date', 'Visit Date') !!}
    {!! Form::date('visit_date', null, ['class' => 'form-control']) !!}
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('phone_or_visit') ? ' has-error' : '' }}">
        <label for="phone_or_visit">Phone Or Visit</label>
        <input name="phone_or_visit" id="phone_or_visit" class="form-control"
               value="{{ isset($visitDetail) ? $visitDetail->phone_or_visit : old('phone_or_visit') }}">
        @if ($errors->has('phone_or_visit'))
            <small class="help-block">{{ $errors->first('phone_or_visit') }}</small>
        @endif
    </div>
</div>

<!-- Details Field -->
<div class="col-sm-12 col-lg-12">
    <div class="form-group">
        <label for="details">Details</label>
        <textarea name="details" id="details" class="form-control"
        >{!! isset($visitDetail) ? $visitDetail->details : old('details') !!}</textarea>
    </div>
</div>

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('created_by') ? ' has-error' : '' }}">--}}
        {{--<label for="created_by">Created By</label>--}}
        {{--<input name="created_by" id="created_by" class="form-control"--}}
               {{--value="{{ isset($visitDetail) ? $visitDetail->created_by : old('created_by') }}">--}}
        {{--@if ($errors->has('created_by'))--}}
            {{--<small class="help-block">{{ $errors->first('created_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('updated_by') ? ' has-error' : '' }}">--}}
        {{--<label for="updated_by">Updated By</label>--}}
        {{--<input name="updated_by" id="updated_by" class="form-control"--}}
               {{--value="{{ isset($visitDetail) ? $visitDetail->updated_by : old('updated_by') }}">--}}
        {{--@if ($errors->has('updated_by'))--}}
            {{--<small class="help-block">{{ $errors->first('updated_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}