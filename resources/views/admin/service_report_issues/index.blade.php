@extends('layouts.admin.master', ['pageTitle' => 'Service Report Issues'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Service Report Issues</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Service Report Issues') }}
                        <div class="panel-action">
                            <a href="{{ route('service-report-issues.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Service Report Issue') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($serviceReportIssues->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Service Report Issues') }} available.</p>
                            @else
                                @include('admin.service_report_issues.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
