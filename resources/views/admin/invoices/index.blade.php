@extends('layouts.admin.master', ['pageTitle' => 'Invoices'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Invoices</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Invoices') }}
                        <div class="panel-action">
                            <a href="{{ route('invoices.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Invoice') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($invoices->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Invoices') }} available.</p>
                            @else
                                @include('admin.invoices.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
