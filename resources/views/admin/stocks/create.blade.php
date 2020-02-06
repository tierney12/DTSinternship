@extends('layouts.admin.master')

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('stock-pricebands.index') }}">Stock Pricebands</a></li>
    <li class="active">Create {{ strtolower('Stock Priceband') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.stocks.form')
        </div>
    </div>
@endsection
