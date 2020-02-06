@extends('layouts.admin.master', ['pageTitle' => 'Dentist Statuses'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Dentist Statuses</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Dentist Statuses') }}
                        <div class="panel-action">
                            <a href="{{ route('dentist-statuses.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Dentist Status') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($dentistStatuses->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Dentist Statuses') }} available.</p>
                            @else
                                @include('admin.dentist_statuses.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
