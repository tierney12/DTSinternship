@extends('layouts.admin.master', ['pageTitle' => 'Discounts'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('discounts.index') }}">Discounts</a></li>
    <li class="active">Create {{ strtolower('Discount') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.discounts.form')
        </div>
    </div>
@endsection
