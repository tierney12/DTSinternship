@extends('layouts.admin.master', ['pageTitle' => 'Job Errors'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Job Errors</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Job Errors') }}
                        <div class="panel-action">
                            <a href="{{ route('job-errors.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Job Error') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($jobErrors->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Job Errors') }} available.</p>
                            @else
                                @include('admin.job_errors.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
