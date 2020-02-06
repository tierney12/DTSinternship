@extends('layouts.admin.master', ['pageTitle' => 'Remake Reasons'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Remake Reasons</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Remake Reasons') }}
                        <div class="panel-action">
                            <a href="{{ route('remake-reasons.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Remake Reason') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($remakeReasons->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Remake Reasons') }} available.</p>
                            @else
                                @include('admin.remake_reasons.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
