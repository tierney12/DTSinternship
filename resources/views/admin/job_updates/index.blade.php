@extends('layouts.admin.master', ['pageTitle' => 'Job Updates'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Job Updates</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Job Updates') }}
                        <div class="panel-action">
                            <a href="{{ route('job-updates.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Job Update') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($jobUpdates->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Job Updates') }} available.</p>
                            @else
                                @include('admin.job_updates.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
