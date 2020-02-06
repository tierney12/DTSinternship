@extends('layouts.admin.master', ['pageTitle' => 'Estimate Details'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Estimate Details</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Estimate Details') }}
                        <div class="panel-action">
                            <a href="{{ route('estimate-details.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Estimate Detail') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($estimateDetails->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Estimate Details') }} available.</p>
                            @else
                                @include('admin.estimate_details.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
