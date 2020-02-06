@extends('layouts.admin.master', ['pageTitle' => 'Visits'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Visits</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Visits') }}
                        <div class="panel-action">
                            <a href="{{ route('visits.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Visit') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($visits->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Visits') }} available.</p>
                            @else
                                @include('admin.visits.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
