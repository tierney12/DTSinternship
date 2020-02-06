@extends('layouts.admin.master', ['pageTitle' => 'Job Layouts'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Job Layouts</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Job Layouts') }}
                        <div class="panel-action">
                            <a href="{{ route('job-layouts.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Job Layout') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($jobLayouts->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Job Layouts') }} available.</p>
                            @else
                                @include('admin.job_layouts.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
