@extends('layouts.admin.master', ['pageTitle' => 'Addresses'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Addresses</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Addresses') }}
                        <div class="panel-action">
                            <a href="{{ route('addresses.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Address') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($addresses->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Addresses') }} available.</p>
                            @else
                                @include('admin.addresses.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
