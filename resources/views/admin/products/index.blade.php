@extends('layouts.admin.master', ['pageTitle' => 'Products'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Products</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Products') }}
                        <div class="panel-action">
                            <a href="{{ route('products.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Product') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($products->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Products') }} available.</p>
                            @else
                                @include('admin.products.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
