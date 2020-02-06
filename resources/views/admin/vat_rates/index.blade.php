@extends('layouts.admin.master', ['pageTitle' => 'Vat Rates'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Vat Rates</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Vat Rates') }}
                        <div class="panel-action">
                            <a href="{{ route('vat-rates.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Vat Rate') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($vatRates->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Vat Rates') }} available.</p>
                            @else
                                @include('admin.vat_rates.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
