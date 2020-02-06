@extends('layouts.admin.master', ['pageTitle' => 'Service Report Recipient Descriptions'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('service-report-recipient-descriptions.index') }}">Service Report Recipient Descriptions</a></li>
    <li class="active">Create {{ strtolower('Service Report Recipient Description') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.service_report_recipient_descriptions.form')
        </div>
    </div>
@endsection
