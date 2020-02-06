@extends('layouts.admin.master', ['pageTitle' => 'Practices'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Practices</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Practices') }}
                        <div class="panel-action">
                            <a href="{{ route('practices.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Practice') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($practices->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Practices') }} available.</p>
                            @else
                                @include('admin.practices.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
