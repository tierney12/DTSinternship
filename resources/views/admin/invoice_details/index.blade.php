@extends('layouts.admin.master', ['pageTitle' => 'Invoice Details'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Invoice Details</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Invoice Details') }}
                        <div class="panel-action">
                            <a href="{{ route('invoice-details.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Invoice Detail') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($invoiceDetails->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Invoice Details') }} available.</p>
                            @else
                                @include('admin.invoice_details.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
