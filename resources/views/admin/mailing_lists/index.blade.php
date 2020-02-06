@extends('layouts.admin.master', ['pageTitle' => 'Mailing Lists'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Mailing Lists</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Mailing Lists') }}
                        <div class="panel-action">
                            <a href="{{ route('mailing-lists.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Mailing List') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($mailingLists->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Mailing Lists') }} available.</p>
                            @else
                                @include('admin.mailing_lists.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
