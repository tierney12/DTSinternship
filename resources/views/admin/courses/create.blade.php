@extends('layouts.admin.master', ['pageTitle' => 'Courses'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('courses.index') }}">Courses</a></li>
    <li class="active">Create {{ strtolower('Course') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.courses.form')
        </div>
    </div>
@endsection
