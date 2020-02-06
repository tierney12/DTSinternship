@extends('layouts.admin.master', ['pageTitle' => 'Stock Pricebands'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Stock Pricebands</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Stock Pricebands') }}
                        <div class="panel-action">
                            <a href="{{ route('stock-pricebands.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Stock Priceband') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($stockPricebands->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Stock Pricebands') }} available.</p>
                            @else
                                @include('admin.stocks.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
