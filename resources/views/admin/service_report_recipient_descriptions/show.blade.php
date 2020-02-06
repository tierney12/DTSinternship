@extends('layouts.admin.master', ['pageTitle' => 'Service Report Recipient Description'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('service-report-recipient-descriptions.index') }}">Service Report Recipient Descriptions</a></li>
    <li class="active">ServiceReportRecipientDescription Details</li>
@endsection

@section('buttons')
    <div class="pull-right p-l-10">
        <a href="{{ route('service-report-recipient-descriptions.edit', $serviceReportRecipientDescription) }}" class="btn btn-info">Edit</a>
        <button type="button" class="btn btn-danger delete-button" data-url="{{ route('service-report-recipient-descriptions.destroy', $serviceReportRecipientDescription) }}">
            Delete
        </button>
    </div>
@endsection

@section('content')
    <div class="panel">
        <div class="panel-body">
            <div class="row">
                    <div class="col-sm-12">
                        <div class="d-table">
                            <div class="t-cell">
                                @include('admin.service_report_recipient_descriptions.show_fields')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    
@endsection
