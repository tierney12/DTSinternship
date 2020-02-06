@extends('layouts.admin.master', ['pageTitle' => 'Transactions'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Transactions</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Transactions') }}
                        <div class="panel-action">
                            <a href="{{ route('transactions.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Transaction') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($transactions->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Transactions') }} available.</p>
                            @else
                                @include('admin.transactions.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
