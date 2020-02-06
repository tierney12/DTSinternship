@extends('layouts.admin.master', ['pageTitle' => 'Dentists'])


@section('breadcrumbs')
    <ol class="breadcrumb" style="padding-right: 20px;">
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Dentists</li>
    </ol>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Dentists') }}
                        <div class="panel-action">
                            <a href="{{ route('dentists.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Dentist') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($dentists->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Dentists') }} available.</p>
                            @else
                                @include('admin.dentists.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
