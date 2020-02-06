@extends('layouts.admin.master', ['pageTitle' => 'Nominal Codes'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('nominal-codes.index') }}">Nominal Codes</a></li>
    <li class="active">Create {{ strtolower('Nominal Code') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.nominal_codes.form')
        </div>
    </div>
@endsection
