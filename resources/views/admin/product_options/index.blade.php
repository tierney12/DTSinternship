@extends('layouts.admin.master', ['pageTitle' => 'Product Options'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Product Options</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Product Options') }}
                        <div class="panel-action">
                            <a href="{{ route('product-options.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Product Option') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($productOptions->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Product Options') }} available.</p>
                            @else
                                @include('admin.product_option.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
