@extends('layouts.admin.master', ['pageTitle' => 'Transactions'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('transactions.index') }}">Transactions</a></li>
    <li class="active">Create {{ strtolower('Transaction') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.transactions.form')
        </div>
    </div>
@endsection
