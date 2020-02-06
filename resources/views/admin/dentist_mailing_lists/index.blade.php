@extends('layouts.admin.master', ['pageTitle' => 'Dentist Mailing Lists'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Dentist Mailing Lists</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Dentist Mailing Lists') }}
                        <div class="panel-action">
                            <a href="{{ route('dentist-mailing-lists.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Dentist Mailing List') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($dentistMailingLists->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Dentist Mailing Lists') }} available.</p>
                            @else
                                @include('admin.dentist_mailing_list.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
