@extends('layouts.admin.master', ['pageTitle' => 'Job Update Items'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('job-update-items.index') }}">Job Update Items</a></li>
    <li class="active">Create {{ strtolower('Job Update Item') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.job_update_items.form')
        </div>
    </div>
@endsection
