@extends('layouts.app', ['pageTitle' => 'Job Works'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('job-works.index') }}">Job Works</a></li>
    <li class="active">Create {{ strtolower('Job Work') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.job_works.form')
        </div>
    </div>
@endsection
