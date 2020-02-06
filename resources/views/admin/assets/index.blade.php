@extends('layouts.admin.master', ['pageTitle' => 'Assets'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Assets</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Assets') }}
                        <div class="panel-action">
                            <a href="{{ route('assets.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Asset') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($assets->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Assets') }} available.</p>
                            @else
                                @include('admin.assets.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
