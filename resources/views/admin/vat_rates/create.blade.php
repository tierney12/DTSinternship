@extends('layouts.admin.master', ['pageTitle' => 'Vat Rates'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('vat-rates.index') }}">Vat Rates</a></li>
    <li class="active">Create {{ strtolower('Vat Rate') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.vat_rates.form')
        </div>
    </div>
@endsection
