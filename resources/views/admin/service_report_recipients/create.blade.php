@extends('layouts.admin.master', ['pageTitle' => 'Service Report Recipients'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('service-report-recipients.index') }}">Service Report Recipients</a></li>
    <li class="active">Create {{ strtolower('Service Report Recipient') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.service_report_recipients.form')
        </div>
    </div>
@endsection
