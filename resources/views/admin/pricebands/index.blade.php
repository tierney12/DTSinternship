@extends('layouts.admin.master', ['pageTitle' => 'Pricebands'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Pricebands</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Pricebands') }}
                        <div class="panel-action">
                            <a href="{{ route('pricebands.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Priceband') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($pricebands->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Pricebands') }} available.</p>
                            @else
                                @include('admin.pricebands.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
