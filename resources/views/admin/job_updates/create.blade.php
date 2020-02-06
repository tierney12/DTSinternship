@extends('layouts.admin.master', ['pageTitle' => 'Job Updates'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('job-updates.index') }}">Job Updates</a></li>
    <li class="active">Create {{ strtolower('Job Update') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.job_updates.form')
        </div>
    </div>
@endsection
