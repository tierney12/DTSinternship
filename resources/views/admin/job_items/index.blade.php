@extends('layouts.admin.master', ['pageTitle' => 'Job Items'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Job Items</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Job Items') }}
                        <div class="panel-action">
                            <a href="{{ route('job-items.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Job Item') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($jobItems->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Job Items') }} available.</p>
                            @else
                                @include('admin.job_items.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
