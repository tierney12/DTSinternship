@extends('layouts.app', ['pageTitle' => 'Job Stocks'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('job-stocks.index') }}">Job Stocks</a></li>
    <li class="active">Create {{ strtolower('Job Stock') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.job_stocks.form')
        </div>
    </div>
@endsection
