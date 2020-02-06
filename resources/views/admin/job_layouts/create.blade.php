@extends('layouts.admin.master', ['pageTitle' => 'Job Layouts'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('job-layouts.index') }}">Job Layouts</a></li>
    <li class="active">Create {{ strtolower('Job Layout') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.job_layouts.form')
        </div>
    </div>
@endsection
