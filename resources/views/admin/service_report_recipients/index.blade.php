@extends('layouts.admin.master', ['pageTitle' => 'Service Report Recipients'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Service Report Recipients</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Service Report Recipients') }}
                        <div class="panel-action">
                            <a href="{{ route('service-report-recipients.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Service Report Recipient') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($serviceReportRecipients->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Service Report Recipients') }} available.</p>
                            @else
                                @include('admin.service_report_recipients.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
