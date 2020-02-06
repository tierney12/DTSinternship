@extends('layouts.admin.master', ['pageTitle' => 'Payments'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Payments</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Payments') }}
                        <div class="panel-action">
                            <a href="{{ route('payments.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Payment') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($payments->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Payments') }} available.</p>
                            @else
                                @include('admin.payments.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
