@extends('layouts.admin.master', ['pageTitle' => 'Service Reports'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('service-reports.index') }}">Service Reports</a></li>
    <li class="active">Create {{ strtolower('Service Report') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.service_reports.form')
        </div>
    </div>
@endsection
