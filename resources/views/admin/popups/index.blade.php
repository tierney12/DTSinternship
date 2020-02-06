@extends('layouts.admin.master', ['pageTitle' => 'Popups'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Popups</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Popups') }}
                        <div class="panel-action">
                            <a href="{{ route('popups.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Popup') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($popups->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Popups') }} available.</p>
                            @else
                                @include('admin.popups.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
