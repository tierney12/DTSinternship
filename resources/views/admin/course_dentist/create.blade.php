@extends('layouts.admin.master', ['pageTitle' => 'Course Dentists'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('course-dentists.index') }}">Course Dentists</a></li>
    <li class="active">Create {{ strtolower('Course Dentist') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.course_dentist.form')
        </div>
    </div>
@endsection
