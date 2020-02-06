@extends('layouts.admin.master', ['pageTitle' => 'Addresses'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('addresses.index') }}">Addresses</a></li>
    <li class="active">Create {{ strtolower('Address') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.addresses.form')
        </div>
    </div>
@endsection
