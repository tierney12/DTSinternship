@extends('layouts.admin.master', ['pageTitle' => 'exceptions'])

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('exceptions.index') }}">exceptions</a></li>
    <li class="active">Create {{ strtolower('Priceband') }}</li>
@endsection

@section('content')
    @include('core-templates::common.errors')

    <form method="POST" action="{{ route('pricebands.store') }}">
        {{ csrf_field() }}
        <div class="panel">
            <div class="panel-body">

                <div class="row">
                    <div class="col-sm-12">

                        <div class="col-sm-6">
                            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name">Name</label>
                                <input name="name" id="name" class="form-control"
                                       value="{{ isset($priceband) ? $priceband->name : old('name') }}">
                                @if ($errors->has('name'))
                                    <small class="help-block">{{ $errors->first('name') }}</small>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="white-box">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="box box-success">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Order Items</h3>
                                </div>
                                <div class="box-body">
                                    <div class="order-items-wrapper">
                                        @include('admin.exceptions.partials.exception-item-single')
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <!-- Submit Field -->
        <div class="row">
            <div class="col-sm-12 form-group text-right">
                <input type="submit" class="btn btn-success" value="Save">
            </div>
        </div>
    </form>
@endsection
