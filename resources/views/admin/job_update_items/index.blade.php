@extends('layouts.admin.master', ['pageTitle' => 'Job Update Items'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Job Update Items</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Job Update Items') }}
                        <div class="panel-action">
                            <a href="{{ route('job-update-items.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Job Update Item') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($jobUpdateItems->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Job Update Items') }} available.</p>
                            @else
                                @include('admin.job_update_items.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
