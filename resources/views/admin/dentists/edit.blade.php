@extends('layouts.admin.master', ['pageTitle' => 'Dentists'])

@section('breadcrumbs')
    <ol class="breadcrumb" style="padding-right: 20px;">
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('dentists.index') }}">Dentists</a></li>
    <li class="active">Edit {{ strtolower('Dentist') }}</li>
    </ol>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <div class="row">
        <div class="col-sm-12">
            <form method="POST"
                  action="{{ route('dentists.update', $dentist) }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="panel">
                    <div class="panel-body">
                        @include('admin.dentists.fields')
                    </div>
                </div>

                <!-- Submit Field -->
                <div class="row">
                    <div class="col-sm-12 form-group text-right">
                        <input type="submit" class="btn btn-success" value="Save">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
