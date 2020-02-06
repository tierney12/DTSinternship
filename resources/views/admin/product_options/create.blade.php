@extends('layouts.admin.master', ['pageTitle' => 'Product Options'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('product-options.index') }}">Product Options</a></li>
    <li class="active">Create {{ strtolower('Product Option') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.product_option.form')
        </div>
    </div>
@endsection
