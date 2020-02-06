@extends('layouts.admin.master', ['pageTitle' => 'Nominal Codes'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Nominal Codes</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Nominal Codes') }}
                        <div class="panel-action">
                            <a href="{{ route('nominal-codes.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Nominal Code') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($nominalCodes->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Nominal Codes') }} available.</p>
                            @else
                                @include('admin.nominal_codes.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
