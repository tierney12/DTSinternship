@extends('layouts.admin.master', ['pageTitle' => 'Service Report Recipient Descriptions'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Service Report Recipient Descriptions</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Service Report Recipient Descriptions') }}
                        <div class="panel-action">
                            <a href="{{ route('service-report-recipient-descriptions.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Service Report Recipient Description') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($serviceReportRecipientDescriptions->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Service Report Recipient Descriptions') }} available.</p>
                            @else
                                @include('admin.service_report_recipient_descriptions.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
