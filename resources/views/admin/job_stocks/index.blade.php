@extends('layouts.app', ['pageTitle' => 'Job Stocks'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Job Stocks</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Job Stocks') }}
                        <div class="panel-action">
                            <a href="{{ route('job-stocks.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Job Stock') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($jobStocks->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Job Stocks') }} available.</p>
                            @else
                                @include('admin.job_stocks.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
