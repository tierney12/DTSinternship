@extends('layouts.admin.master', ['pageTitle' => 'Job Errors'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('job-errors.index') }}">Job Errors</a></li>
    <li class="active">Create {{ strtolower('Job Error') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.job_errors.form')
        </div>
    </div>
@endsection
