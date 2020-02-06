<div class="col-sm-6">
    <div class="form-group {{ $errors->has('course_title') ? ' has-error' : '' }}">
        <label for="course_title">Course Title</label>
        <input name="course_title" id="course_title" class="form-control"
               value="{{ isset($course) ? $course->course_title : old('course_title') }}">
        @if ($errors->has('course_title'))
            <small class="help-block">{{ $errors->first('course_title') }}</small>
        @endif
    </div>
</div>

<!-- Course Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_date', 'Course Date') !!}
    {!! Form::date('course_date', null, ['class' => 'form-control']) !!}
</div>

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('created_by') ? ' has-error' : '' }}">--}}
        {{--<label for="created_by">Created By</label>--}}
        {{--<input name="created_by" id="created_by" class="form-control"--}}
               {{--value="{{ isset($course) ? $course->created_by : old('created_by') }}">--}}
        {{--@if ($errors->has('created_by'))--}}
            {{--<small class="help-block">{{ $errors->first('created_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('updated_by') ? ' has-error' : '' }}">--}}
        {{--<label for="updated_by">Updated By</label>--}}
        {{--<input name="updated_by" id="updated_by" class="form-control"--}}
               {{--value="{{ isset($course) ? $course->updated_by : old('updated_by') }}">--}}
        {{--@if ($errors->has('updated_by'))--}}
            {{--<small class="help-block">{{ $errors->first('updated_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}