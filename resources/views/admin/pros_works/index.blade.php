@extends('layouts.app', ['pageTitle' => 'Pros Works'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Pros Works</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Pros Works') }}
                        <div class="panel-action">
                            <a href="{{ route('pros-works.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Pros Work') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($prosWorks->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Pros Works') }} available.</p>
                            @else
                                @include('admin.pros_works.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
