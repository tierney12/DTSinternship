@extends('layouts.admin.master', ['pageTitle' => 'Service Report Issues'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('service-report-issues.index') }}">Service Report Issues</a></li>
    <li class="active">Create {{ strtolower('Service Report Issue') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.service_report_issues.form')
        </div>
    </div>
@endsection
