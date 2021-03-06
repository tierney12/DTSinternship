@extends('layouts.admin.master', ['pageTitle' => 'Service Report Recipient Descriptions'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('service-report-recipient-descriptions.index') }}">Service Report Recipient Descriptions</a></li>
    <li class="active">Edit {{ strtolower('Service Report Recipient Description') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            <form method="POST"
                  action="{{ route('service-report-recipient-descriptions.update', $serviceReportRecipientDescription) }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="panel">
                    <div class="panel-body">
                        @include('admin.service_report_recipient_descriptions.fields')
                    </div>
                </div>

                <!-- Submit Field -->
                <div class="row">
                    <div class="col-sm-12 form-group text-right">
                        <input type="submit" class="btn btn-success" value="Save">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
