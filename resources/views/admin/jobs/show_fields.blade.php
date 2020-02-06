<div class="row">
<div class="form-group col-sm-3">
    {!! Form::label('id', 'ID:') !!}
    <p>{!! $job->id !!}</p>
</div>
<div class="form-group col-sm-3">
    {!! Form::label('date_in', 'In:') !!}
    <p>{{\Carbon\Carbon::parse($job->date_in)->format('d/m/Y') }}</p>
</div>
<div class="form-group col-sm-3">
    {!! Form::label('date_due_out', 'Due Out:') !!}
    <p>{{\Carbon\Carbon::parse($job->date_out)->format('d/m/Y') }}</p>
</div>
<div class="form-group col-sm-3">
    {!! Form::label('area', 'Area:') !!}
    <p>{!! $job->dentist->area->Area !!}</p>
</div>
</div>

<div class="row">
    <div class="form-group col-sm-3">
        {!! Form::label('dentist', 'Dentist:') !!}
        <p>{!! $job->dentist->title . " " . $job->dentist->firstname . " " . $job->dentist->surname !!}</p>
    </div>

    <div class="form-group col-sm-3">
        {!! Form::label('patient_name', 'Patient:') !!}
        <p>{!! $job->patient_name !!}</p>
    </div>

    <div class="form-group col-sm-2">
        {!! Form::label('shade', 'Shade:') !!}
        <p>{!! $job->shade !!}</p>
    </div>

    <div class="form-group col-sm-2">
        {!! Form::label('impressions', 'Impressions:') !!}
        <p>{!! $job->impressions !!}</p>
    </div>
    <div class="form-group col-sm-2">
        {!! Form::label('models', 'Models:') !!}
        <p>{!! $job->models !!}</p>
    </div>
</div>

<hr>

<div class="row">
    <div class="form-group col-sm-3">
        {!! Form::label('remake', 'Remake:') !!}
        @if($job->remake == 1)
            <p>Yes</p>
    </div>
            <div class="form-group col-sm-3">
                {!! Form::label('orig_job', 'Date of Orig Job:') !!}
                <p>{!! \Carbon\Carbon::parse($job->remake->date_in)->format('d/m/Y') !!}</p>
            </div>
            <div class="col-sm-3"></div>
            <div class="form-group col-sm-3">
                {!! Form::label('remake_reason', 'Reason:') !!}
                <p>{{$job->remakeReason->name}}</p>
            </div>
        @else
        <p>No</p>
    </div>
        @endif

</div>

<hr>

<div class="row">
    <div class="form-group col-sm-3">
        {!! Form::label('lab_sheet', 'Lab Sheet:') !!}
        <p>{!! $job->labSheet->name !!}</p>
    </div>
    <div class="form-group col-sm-3">
        {!! Form::label('lab', 'Lab:') !!}
        <p>{!! $job->department->name !!}</p>
    </div>
</div>

