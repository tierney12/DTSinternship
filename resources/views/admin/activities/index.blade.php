@extends('layouts.admin.master', ['pageTitle' => 'Activities'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Activities</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Activities') }}
                        <div class="panel-action">
                            <a href="{{ route('activities.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Activity') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($activities->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Activities') }} available.</p>
                            @else
                                @include('admin.activities.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
