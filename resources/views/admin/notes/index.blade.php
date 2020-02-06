@extends('layouts.admin.master', ['pageTitle' => 'Notes'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="active">Notes</li>
@endsection

@section('content')
    <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{ strtoupper('Notes') }}
                        <div class="panel-action">
                            <a href="{{ route('notes.create') }}"
                               class="btn btn-primary btn-wl">Add {{ strtolower('Note') }}</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($notes->count() == 0)
                                <p class="p-20">There are no {{ strtolower('Notes') }} available.</p>
                            @else
                                @include('admin.notes.table')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
