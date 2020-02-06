@extends('layouts.admin.master', ['pageTitle' => 'Products'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('products.index') }}">Products</a></li>
    <li class="active">Create {{ strtolower('Product') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            @include('admin.products.form')
        </div>
    </div>
@endsection
