@extends('layouts.admin.master')

@section('section-title')
    <h4 class="page-title">Book in job</h4>
@endsection

@section('breadcrumbs')
    <ol class="breadcrumb" style="padding-right: 20px;">
        <li><a href="/">Home</a></li>
        <li class="active">Book In Job</li>
    </ol>
@endsection

@section('content')

    <form method="POST" action="{{ route('jobs.store') }}">
        {{ csrf_field() }}


        <div class="white-box">


            <div class="row">

                <!-- Dentist Id Field -->
                <div class="form-group col-sm-4">
                    {!! Form::label('jobs[dentist_id]', 'Dentist') !!}
                    <select name="jobs[dentist_id]" id="dentist_id" class="form-control chosen-select" data-placeholder="Select a Dentist">
                        <option></option>
                        {{--<option class="fly-add-option">Add a Dentist</option>--}}
                        @foreach($dentists as $dentist)
                            <option value="{{ $dentist->id }}" {{ isset($job) && $job->dentist_id == $dentist->id ? 'selected' : '' }}>{{ $dentist->title . " " . $dentist->firstname . " " . $dentist->surname }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Patient Name Field -->
                <div class="form-group col-sm-4">
                    <div class="form-group {{ $errors->has('patient_name') ? ' has-error' : '' }}">
                        <label for="patient_name">Patient Name</label>
                        <input name="jobs[patient_name]" id="patient_name" class="form-control"
                               value="{{ isset($job) ? $job->patient_name : old('patient_name') }}">
                        @if ($errors->has('patient_name'))
                            <small class="help-block">{{ $errors->first('patient_name') }}</small>
                        @endif
                    </div>
                </div>

            </div>

            <div class="row">

                <!-- Date In Field -->
                <div class="form-group col-sm-3">
                    {!! Form::label('jobs[date_in]', 'Date In') !!}
                    {!! Form::date('jobs[date_in]',  isset($job) ? \Carbon\Carbon::parse($job->date_in)->format('Y-m-d') : null , ['class' => 'form-control']) !!}
                </div>


                <!-- Date Due Out Field -->
                <div class="form-group col-sm-3">
                    {!! Form::label('jobs[date_due_out]', 'Date Due Out') !!}
                    {!! Form::date('jobs[date_due_out]',  isset($job) ? \Carbon\Carbon::parse($job->date_due_out)->format('Y-m-d') : null , ['class' => 'form-control']) !!}
                </div>

                {{--<!-- Delivery Date Field -->--}}
                {{--<div class="form-group col-sm-3">--}}
                    {{--{!! Form::label('delivery_date', 'Delivery Date:') !!}--}}
                    {{--{!! Form::date('jobs[delivery_date]',  isset($job) ? \Carbon\Carbon::parse($job->delivery_date)->format('Y-m-d') : null , ['class' => 'form-control']) !!}--}}
                {{--</div>--}}
            </div>

            <div class="row">


                <!-- Lab Sheet Field -->
                <div class="form-group col-sm-3">
                    {!! Form::label('lab_sheet_id', 'Lab Sheet') !!}
                    <select name="jobs[lab_sheet_id]" id="lab_sheet_id" class="form-control chosen-select" data-placeholder="Select a Lab Sheet">
                        <option></option>
                        {{--<option class="fly-add-option">Add a Lab Sheet</option>--}}
                        @foreach($labSheets as $id => $name)
                            <option value="{{ $id }}" {{ isset($job) && $job->lab_sheet_id == $id ? 'selected' : '' }}>{{ $name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Department Id Field -->
                <div class="form-group col-sm-3">
                    {!! Form::label('department_id', 'Department') !!}
                    <select name="jobs[department_id]" id="department_id" class="form-control chosen-select" data-placeholder="Select a Department">
                        <option></option>
                        {{--<option class="fly-add-option">Add a Department</option>--}}
                        @foreach($departments as $id => $name)
                            <option value="{{ $id }}" {{ isset($job) && $job->department_id == $id ? 'selected' : '' }}>{{ $name }}</option>
                        @endforeach
                    </select>
                </div>


            </div>

            <div class="row">

                <!-- Impressions Field -->
                <div class="form-group col-sm-2">
                    <div class="form-group {{ $errors->has('impressions') ? ' has-error' : '' }}">
                        <label for="impressions">Impressions</label>
                        <input name="jobs[impressions]" id="impressions" class="form-control"
                               value="{{ isset($job) ? $job->impressions : old('impressions') }}">
                        @if ($errors->has('impressions'))
                            <small class="help-block">{{ $errors->first('impressions') }}</small>
                        @endif
                    </div>
                </div>

                <!-- Models Field -->
                <div class="form-group col-sm-2">
                    <div class="form-group {{ $errors->has('models') ? ' has-error' : '' }}">
                        <label for="models">Models</label>
                        <input name="jobs[models]" id="models" class="form-control"
                               value="{{ isset($job) ? $job->models : old('models') }}">
                        @if ($errors->has('models'))
                            <small class="help-block">{{ $errors->first('models') }}</small>
                        @endif
                    </div>
                </div>

                <!-- Others Field -->
                <div class="form-group col-sm-2">
                    <div class="form-group {{ $errors->has('others') ? ' has-error' : '' }}">
                        <label for="others">Others</label>
                        <input name="jobs[others]" id="others" class="form-control"
                               value="{{ isset($job) ? $job->others : old('others') }}">
                        @if ($errors->has('others'))
                            <small class="help-block">{{ $errors->first('others') }}</small>
                        @endif
                    </div>
                </div>
            </div>



            <div class="row">

            <!-- Shade Field -->
                <div class="form-group col-sm-2">
                    <div class="form-group {{ $errors->has('shade') ? ' has-error' : '' }}">
                        <label for="shade">Shade</label>
                        <input name="jobs[shade]" id="shade" class="form-control"
                               value="{{ isset($job) ? $job->shade : old('shade') }}">
                        @if ($errors->has('shade'))
                            <small class="help-block">{{ $errors->first('shade') }}</small>
                        @endif
                    </div>
                </div>

            <!-- Nominal Code Id Field -->
                <div class="form-group col-sm-2">
                    {!! Form::label('nominal_code_id', 'Nominal Code') !!}
                    <select name="jobs[nominal_code_id]" id="nominal_code_id" class="form-control chosen-select" data-placeholder="Select a Nominal Code">
                        <option></option>
                        {{--<option class="fly-add-option">Add a Nominal Code</option>--}}
                        @foreach($nominalCodes as $id => $name)
                            <option value="{{ $id }}" {{ isset($job) && $job->nominal_code_id == $id ? 'selected' : '' }}>{{ $name }}</option>
                        @endforeach
                    </select>
                </div>

            </div>

            {{--<!-- Lab Sheet Id Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('lab_sheet_id', 'Lab Sheet Id:') !!}
                {!! Form::text('lab_sheet_id', null, ['class' => 'form-control']) !!}
            </div>--}}

            {{--<!-- Order Error Id Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('order_error_id', 'Order Error Id:') !!}
                {!! Form::text('order_error_id', null, ['class' => 'form-control']) !!}
            </div>--}}

            <div class="row">
                <!-- Bites Field -->
                <div class="form-group col-sm-12 mb-0">
                    <div class="checkbox checkbox-wl">
                        <input type="hidden" name="jobs[bites]" value="0">
                        <input id="bites"
                               type="checkbox"
                               name="jobs[bites]"
                               value="1" {{ isset($job) ? ($job->bites ? 'checked' : '') : '' }}>
                        <label for="bites">Bites Provided</label>
                    </div>
                </div>

                <div class="form-group col-sm-12 mb-0">
                    <div class="checkbox checkbox-wl">
                        <input type="hidden" name="jobs[estimate]" value="0">
                        <input id="estimate"
                               type="checkbox"
                               name="jobs[estimate]"
                               value="1" {{ isset($job) ? ($job->bites ? 'checked' : '') : '' }}>
                        <label for="estimate">Estimate</label>
                    </div>
                </div>

                <div class="form-group col-sm-12 mb-0">
                    <div class="checkbox checkbox-wl">
                        <input type="hidden" name="jobs[remake]" value="0">
                        <input id="remake"
                               type="checkbox"
                               name="jobs[remake]"
                               value="1" {{ isset($job) ? ($job->remake ? 'checked' : '') : '' }}>
                        <label for="remake">Remake</label>
                    </div>
                </div>
            </div>
            <div id="remakeDetails" style="display: none;">
                <div class="row">
                    <!-- Remake Reason Id Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('remake_reason_id', 'Remake Reason') !!}
                        <select name="jobs[remake_reason_id]" id="remake_reason_id" class="form-control chosen-select" data-placeholder="Select a Remake Reason">
                            <option></option>
                            {{--<option class="fly-add-option">Add a Remake Reason</option>--}}
                            @foreach($remakeReasons as $id => $name)
                                <option value="{{ $id }}" {{ isset($job) && $job->remake_reason_id == $id ? 'selected' : '' }}>{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Remake Date Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('remake_date', 'Remake Date') !!}
                        {!! Form::date('jobs[remake_date]',  isset($job) ? \Carbon\Carbon::parse($job->remake_date)->format('Y-m-d') : null , ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="row">
                    <!-- Remake Original Id Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('remake_original_ref', 'Remake Original Reference') !!}
                        <select name="jobs[remake_original_ref]" id="remake_original_ref" class="form-control chosen-select" data-placeholder="Select a Job" >
                            <option></option>
                            {{--<option class="fly-add-option">Add a Job</option>--}}
                            @foreach($remakeOriginalRefs as $id => $name)
                                <option value="{{ $id }}" {{ isset($job) && $job->remake_original_ref == $id ? 'selected' : '' }}>{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
            </div>
        </div>

        <div class="white-box">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Job Layout</h3>
                        </div>
                        <div class="box-body">
                            <!--  Layout fields -->
                        @include('admin.partials.job_layout')
                        <!-- /.box-body -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="white-box order">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Order Items</h3>
                        </div>
                        <div class="box-body">
                            <div class="order-items-wrapper">
                                @include('admin.partials.order-item-single')
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>
        </div>

        <div class="white-box crown_bridge">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Crown & Bridge Work</h3>
                        </div>
                        <div class="box-body">
                                @include('admin.crown_bridge_works.fields')
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>
        </div>

        <div class="white-box pros">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Pros Work</h3>
                        </div>
                        <div class="box-body">
                                @include('admin.pros_works.fields')
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Special Instructions Field -->
            <div class="form-group col-sm-12 col-lg-12">
                <label for="special_instructions">Special Instructions</label>
                <textarea name="jobs[special_instructions]" id="special_instructions" class="form-control">
                {!! isset($job) ? $job->special_instructions : old('special_instructions') !!}</textarea>
            </div>
        </div>

        {{--<div class="row">--}}
            {{--<!-- Special Instructions Field -->--}}
            {{--<div class="form-group col-sm-12 col-lg-12">--}}
                {{--<label for="comments">Comments</label>--}}
                {{--<textarea name="jobs[comments]" id="comments" class="form-control">--}}
                {{--{!! isset($job) ? $job->comments : old('comments') !!}</textarea>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="row">--}}
        {{--<!-- Date Despatched Field -->--}}
        {{--<div class="form-group col-sm-3">--}}
        {{--{!! Form::label('date_despatched', 'Date Despatched:') !!}--}}
        {{--{!! Form::date('date_despatched', null, ['class' => 'form-control']) !!}--}}
        {{--</div>--}}
        {{--</div>--}}

        <div class="row">
            <!-- Submit Field -->
            <div class="row">
                <div class="col-sm-8 form-group text-right">
                    <input type="submit" class="btn btn-success" value="Save">
                </div>
            </div>
        </div>

    </form>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            var date = new Date();
            var month = (date.getMonth() + 1);

            if (month < 10) {
                month = '0' + month;
            }

            if (date.getDate() < 10) {
                var day = '0' + date.getDate();
            }
            else {
                var day = date.getDate();
            }

            currentDate = {{\Carbon\Carbon::parse(date('d-m-Y'))->format('Y-m-d')}}
            $('#jobs[date_in]').val(currentDate);
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#remake').on('change', function() {
                if ( $(this).is(':checked') ) {
                    $('#remakeDetails').show();
                    $('#remakeReason').focus();
                    $('#lab_sheet_id').attr('tabindex', 13);
                }
                else {
                    $('#lab_sheet_id').focus();
                    $('#remakeDetails').hide();
                    $('#remake_original_ref').val(null);
                    $('#remake_reason_id').val(null);
                    $('#remake_date').val(null);

                }
            });
        });

    </script>

    <script>

        $(document).ready(function(){
            $(document).on('change', '#dentist_id', function(){

                if($('#dentist_id').val() == 0 || $('#dentist_id').val() == ""){
                    $('.order').hide();
                    return;
                }

                var dentist_id = $(this).val();

                $.ajax({
                    type:'get',
                    url:'{!! URL::to('/getPricebandStocks') !!}',
                    data:{'id':dentist_id},
                    success:function(data){

                        result = data;
                        console.log(result);

                        $('.stock_code').empty();
                        $('.stock_description').empty();

                        $('.stock_code').append("<option value=''></option>");
                        $('.stock_description').append("<option value=''></option>");

                        jQuery.each(result, function(key, value){
                            $('.stock_code').append("<option value='" + value['id'] + "'>" + value['stock_code'] + "</option>");
                            $('.stock_description').append("<option value='" + value['id'] + "'>" + value['stock_description'] + "</option>");
                        });

                        $('.stock_code').trigger('chosen:updated');
                        $('.stock_description').trigger('chosen:updated');

                        document.getElementsByClassName('selectable').chosen
                        $('.stock_price').val("0.00");

                        $('.order').show();
                    }
                });
            });
        });

    </script>

     <script>

         $(document).ready(function() {
             $('.pros').hide();
             $('.crown_bridge').hide();
             $('.order').hide();

         })

         $(document).ready(function(){
             $(document).on('change', '#department_id', function(){

                 console.log('enters script');

                 var dep_id=$(this).val();

                 $.ajax({
                     type:'get',
                     url:'{!! URL::to('/findDepartmentWork') !!}',
                     data:{'id':dep_id},
                     success:function(data){

                         result = data;
                         console.log(result);

                         console.log(result[0]['crown_bridge_work']);

                         if(result[0]['crown_bridge_work']){
                             $('.crown_bridge').show();
                         }
                         else{
                             $('.crown_bridge').hide();
                         }

                         console.log(result[0]['pros_work']);

                         if(result[0]['pros_work']){
                             $('.pros').show();
                         }
                         else{
                             $('.pros').hide();
                         }

                     }
                 });
             });
         });

    </script>


@endsection

