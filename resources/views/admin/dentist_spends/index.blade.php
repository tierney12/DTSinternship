@extends('layouts.admin.master', ['pageTitle' => 'Dentist Spends'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Dentist Spends</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Dentist Spends') }}
                        <div class="panel-action">
                            <a href="{{ route('dentist-spends.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Dentist Spend') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($dentistSpends->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Dentist Spends') }} available.</p>
                            @else
                                @include('admin.dentist_spends.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
