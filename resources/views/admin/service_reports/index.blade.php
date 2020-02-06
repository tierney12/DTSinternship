@extends('layouts.admin.master', ['pageTitle' => 'Service Reports'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Service Reports</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Service Reports') }}
                        <div class="panel-action">
                            <a href="{{ route('service-reports.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Service Report') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($serviceReports->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Service Reports') }} available.</p>
                            @else
                                @include('admin.service_reports.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
