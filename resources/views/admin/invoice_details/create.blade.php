@extends('layouts.admin.master', ['pageTitle' => 'Invoice Details'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('invoice-details.index') }}">Invoice Details</a></li>
    <li class="active">Create {{ strtolower('Invoice Detail') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.invoice_details.form')
        </div>
    </div>
@endsection
