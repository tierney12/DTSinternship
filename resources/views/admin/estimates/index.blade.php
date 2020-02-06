@extends('layouts.admin.master', ['pageTitle' => 'Estimates'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Estimates</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Estimates') }}
                        <div class="panel-action">
                            <a href="{{ route('estimates.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Estimate') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($estimates->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Estimates') }} available.</p>
                            @else
                                @include('admin.estimates.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
