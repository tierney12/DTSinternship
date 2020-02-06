@extends('layouts.admin.master', ['pageTitle' => 'Invoice Statuses'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Invoice Statuses</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Invoice Statuses') }}
                        <div class="panel-action">
                            <a href="{{ route('invoice-statuses.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Invoice Status') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($invoiceStatuses->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Invoice Statuses') }} available.</p>
                            @else
                                @include('admin.invoice_statuses.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
