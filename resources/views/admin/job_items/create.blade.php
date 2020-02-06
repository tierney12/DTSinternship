@extends('layouts.admin.master', ['pageTitle' => 'Job Items'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('job-items.index') }}">Job Items</a></li>
    <li class="active">Create {{ strtolower('Job Item') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.job_items.form')
        </div>
    </div>
@endsection
