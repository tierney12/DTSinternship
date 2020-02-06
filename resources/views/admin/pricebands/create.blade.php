@extends('layouts.admin.master', ['pageTitle' => 'Pricebands'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('pricebands.index') }}">Pricebands</a></li>
    <li class="active">Create {{ strtolower('Priceband') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.pricebands.form')
        </div>
    </div>
@endsection
