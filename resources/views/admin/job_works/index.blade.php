@extends('layouts.app', ['pageTitle' => 'Job Works'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Job Works</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Job Works') }}
                        <div class="panel-action">
                            <a href="{{ route('job-works.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Job Work') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($jobWorks->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Job Works') }} available.</p>
                            @else
                                @include('admin.job_works.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
