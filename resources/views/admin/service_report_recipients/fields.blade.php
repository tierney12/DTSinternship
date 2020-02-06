<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="active" value="0">
            <input id="active"
                   type="checkbox"
                   name="active"
                   value="1" {{ isset($serviceReportRecipient) ? ($serviceReportRecipient->active ? 'checked' : '') : '' }}>
            <label for="active">Active</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="Receives_admin" value="0">
            <input id="Receives_admin"
                   type="checkbox"
                   name="Receives_admin"
                   value="1" {{ isset($serviceReportRecipient) ? ($serviceReportRecipient->Receives_admin ? 'checked' : '') : '' }}>
            <label for="Receives_admin">Receives Admin</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="Receives_director" value="0">
            <input id="Receives_director"
                   type="checkbox"
                   name="Receives_director"
                   value="1" {{ isset($serviceReportRecipient) ? ($serviceReportRecipient->Receives_director ? 'checked' : '') : '' }}>
            <label for="Receives_director">Receives Director</label>
        </div>
    </div>
</div>

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('created_by') ? ' has-error' : '' }}">--}}
        {{--<label for="created_by">Created By</label>--}}
        {{--<input name="created_by" id="created_by" class="form-control"--}}
               {{--value="{{ isset($serviceReportRecipient) ? $serviceReportRecipient->created_by : old('created_by') }}">--}}
        {{--@if ($errors->has('created_by'))--}}
            {{--<small class="help-block">{{ $errors->first('created_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('updated_by') ? ' has-error' : '' }}">--}}
        {{--<label for="updated_by">Updated By</label>--}}
        {{--<input name="updated_by" id="updated_by" class="form-control"--}}
               {{--value="{{ isset($serviceReportRecipient) ? $serviceReportRecipient->updated_by : old('updated_by') }}">--}}
        {{--@if ($errors->has('updated_by'))--}}
            {{--<small class="help-block">{{ $errors->first('updated_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}