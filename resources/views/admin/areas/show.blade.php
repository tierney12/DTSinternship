@extends('layouts.admin.master', ['pageTitle' => 'Area'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('areas.index') }}">Areas</a></li>
    <li class="active">Area Details</li>
@endsection

@section('buttons')
    <div class="pull-right p-l-10">
        <a href="{{ route('areas.edit', $area) }}" class="btn btn-info">Edit</a>
        {{ Form::open(['method' => 'DELETE', 'route' => ['areas.destroy', $area->id]]) }}
        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
        {{ Form::close() }}
    </div>
@endsection

@section('content')
    <div class="panel">
        <div class="panel-body">
            <div class="row">
                    <div class="col-sm-12">
                        <div class="d-table">
                            <div class="t-cell">
                                @include('admin.areas.show_fields')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    
@endsection
