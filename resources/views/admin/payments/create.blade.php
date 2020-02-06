@extends('layouts.admin.master', ['pageTitle' => 'Payments'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('payments.index') }}">Payments</a></li>
    <li class="active">Create {{ strtolower('Payment') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.payments.form')
        </div>
    </div>
@endsection
