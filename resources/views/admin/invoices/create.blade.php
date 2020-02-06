@extends('layouts.admin.master', ['pageTitle' => 'Invoices'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('invoices.index') }}">Invoices</a></li>
    <li class="active">Create {{ strtolower('Invoice') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.invoices.form')
        </div>
    </div>
@endsection
