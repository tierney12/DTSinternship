@extends('layouts.app', ['pageTitle' => 'Crown Bridge Works'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Crown Bridge Works</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Crown Bridge Works') }}
                        <div class="panel-action">
                            <a href="{{ route('crown-bridge-works.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Crown Bridge Work') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($cb_works->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Crown Bridge Works') }} available.</p>
                            @else
                                @include('admin.crown_bridge_works.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
