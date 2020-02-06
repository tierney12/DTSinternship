<div class="col-sm-6">
    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name">Name</label>
        <input name="name" id="name" class="form-control"
               value="{{ isset($document) ? $document->name : old('name') }}">
        @if ($errors->has('name'))
            <small class="help-block">{{ $errors->first('name') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('mimetype') ? ' has-error' : '' }}">
        <label for="mimetype">Mimetype</label>
        <input name="mimetype" id="mimetype" class="form-control"
               value="{{ isset($document) ? $document->mimetype : old('mimetype') }}">
        @if ($errors->has('mimetype'))
            <small class="help-block">{{ $errors->first('mimetype') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('filesize') ? ' has-error' : '' }}">
        <label for="filesize">Filesize</label>
        <input name="filesize" id="filesize" class="form-control"
               value="{{ isset($document) ? $document->filesize : old('filesize') }}">
        @if ($errors->has('filesize'))
            <small class="help-block">{{ $errors->first('filesize') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('filename') ? ' has-error' : '' }}">
        <label for="filename">Filename</label>
        <input name="filename" id="filename" class="form-control"
               value="{{ isset($document) ? $document->filename : old('filename') }}">
        @if ($errors->has('filename'))
            <small class="help-block">{{ $errors->first('filename') }}</small>
        @endif
    </div>
</div>

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('created_by') ? ' has-error' : '' }}">--}}
        {{--<label for="created_by">Created By</label>--}}
        {{--<input name="created_by" id="created_by" class="form-control"--}}
               {{--value="{{ isset($document) ? $document->created_by : old('created_by') }}">--}}
        {{--@if ($errors->has('created_by'))--}}
            {{--<small class="help-block">{{ $errors->first('created_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('updated_by') ? ' has-error' : '' }}">--}}
        {{--<label for="updated_by">Updated By</label>--}}
        {{--<input name="updated_by" id="updated_by" class="form-control"--}}
               {{--value="{{ isset($document) ? $document->updated_by : old('updated_by') }}">--}}
        {{--@if ($errors->has('updated_by'))--}}
            {{--<small class="help-block">{{ $errors->first('updated_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}