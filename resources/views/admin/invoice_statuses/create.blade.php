@extends('layouts.admin.master', ['pageTitle' => 'Invoice Statuses'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('invoice-statuses.index') }}">Invoice Statuses</a></li>
    <li class="active">Create {{ strtolower('Invoice Status') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.invoice_statuses.form')
        </div>
    </div>
@endsection
