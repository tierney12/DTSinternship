@extends('layouts.admin.master', ['pageTitle' => 'Discounts'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Discounts</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Discounts') }}
                        <div class="panel-action">
                            <a href="{{ route('discounts.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Discount') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($discounts->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Discounts') }} available.</p>
                            @else
                                @include('admin.discounts.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
