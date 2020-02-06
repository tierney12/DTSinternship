@extends('layouts.admin.master', ['pageTitle' => 'Info Sent To Dentists'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Info Sent To Dentists</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Info Sent To Dentists') }}
                        <div class="panel-action">
                            <a href="{{ route('info-sent-to-dentists.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Info Sent To Dentist') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($infoSentToDentists->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Info Sent To Dentists') }} available.</p>
                            @else
                                @include('admin.info_sent_to_dentists.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
