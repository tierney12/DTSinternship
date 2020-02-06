@extends('layouts.admin.master', ['pageTitle' => 'exceptions'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">exceptions</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('exceptions') }}
                        <div class="panel-action">
                            <a href="{{ route('exceptions.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Priceband') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($exceptions->count() == 0)
                                <p class="p-20">There are no {{ strtolower('exceptions') }} available.</p>
                            @else
                                @include('admin.exceptions.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
