<div class="col-sm-6">
    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name">Name</label>
        <input name="name" id="name" class="form-control"
               value="{{ isset($mailingList) ? $mailingList->name : old('name') }}">
        @if ($errors->has('name'))
            <small class="help-block">{{ $errors->first('name') }}</small>
        @endif
    </div>
</div>

<!-- Description Field -->
<div class="col-sm-12 col-lg-12">
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control"
        >{!! isset($mailingList) ? $mailingList->description : old('description') !!}</textarea>
    </div>
</div>

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('created_by') ? ' has-error' : '' }}">--}}
        {{--<label for="created_by">Created By</label>--}}
        {{--<input name="created_by" id="created_by" class="form-control"--}}
               {{--value="{{ isset($mailingList) ? $mailingList->created_by : old('created_by') }}">--}}
        {{--@if ($errors->has('created_by'))--}}
            {{--<small class="help-block">{{ $errors->first('created_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('updated_by') ? ' has-error' : '' }}">--}}
        {{--<label for="updated_by">Updated By</label>--}}
        {{--<input name="updated_by" id="updated_by" class="form-control"--}}
               {{--value="{{ isset($mailingList) ? $mailingList->updated_by : old('updated_by') }}">--}}
        {{--@if ($errors->has('updated_by'))--}}
            {{--<small class="help-block">{{ $errors->first('updated_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}