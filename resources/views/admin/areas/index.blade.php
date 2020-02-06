@extends('layouts.admin.master', ['pageTitle' => 'Areas'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Areas</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Areas') }}
                        <div class="panel-action">
                            <a href="{{ route('areas.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Area') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($areas->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Areas') }} available.</p>
                            @else
                                @include('admin.areas.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
