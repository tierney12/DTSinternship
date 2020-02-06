@extends('layouts.admin.master', ['pageTitle' => 'Jobs'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('jobs.index') }}">Jobs</a></li>
    <li class="active">Create {{ strtolower('Job') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.jobs.form')
        </div>
    </div>
@endsection
