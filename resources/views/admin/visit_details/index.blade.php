@extends('layouts.admin.master', ['pageTitle' => 'Visit Details'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Visit Details</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Visit Details') }}
                        <div class="panel-action">
                            <a href="{{ route('visit-details.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Visit Detail') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($visitDetails->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Visit Details') }} available.</p>
                            @else
                                @include('admin.visit_details.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
