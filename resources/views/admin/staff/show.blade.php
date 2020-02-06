@extends('layouts.admin.master', ['pageTitle' => 'Staff'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('staff.index') }}">Staff</a></li>
    <li class="active">Staff Details</li>
@endsection

@section('buttons')
    <div class="pull-right p-l-10">
        <a href="{{ route('staff.edit', $staff) }}" class="btn btn-info">Edit</a>
        <button type="button" class="btn btn-danger delete-button" data-url="{{ route('staff.destroy', $staff) }}">
            Delete
        </button>
    </div>
@endsection

@section('content')
    <div class="panel">
        <div class="panel-body">
            <div class="row">
                    <div class="col-sm-12">
                        <div class="d-table">
                            <div class="t-cell">
                                @include('admin.staff.show_fields')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    
@endsection
