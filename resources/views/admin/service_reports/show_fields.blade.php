<div class="t-row">
    <div class="t-cell text-right">
        <strong>Id</strong>
    </div>
    <div class="t-cell">
        {!! $serviceReport->id !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Dentist</strong>
    </div>
    <div class="t-cell">
        {!! $serviceReport->dentist->name !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Job</strong>
    </div>
    <div class="t-cell">
        {!! $serviceReport->job->name !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Description</strong>
    </div>
    <div class="t-cell">
        {!! $serviceReport->description !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Service Report Issue</strong>
    </div>
    <div class="t-cell">
        {!! $serviceReport->serviceReportIssue->name !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Root Cause</strong>
    </div>
    <div class="t-cell">
        {!! $serviceReport->root_cause !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Resolution</strong>
    </div>
    <div class="t-cell">
        {!! $serviceReport->resolution !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Tech Resolution</strong>
    </div>
    <div class="t-cell">
        {!! $serviceReport->tech_resolution !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Tech Ref</strong>
    </div>
    <div class="t-cell">
        {!! $serviceReport->tech_ref !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Cancelling Tech Ref</strong>
    </div>
    <div class="t-cell">
        {!! $serviceReport->cancelling_tech_ref !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Report To</strong>
    </div>
    <div class="t-cell">
        {!! $serviceReport->report_to !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Created By</strong>
    </div>
    <div class="t-cell">
        {!! $serviceReport->created_by !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Updated By</strong>
    </div>
    <div class="t-cell">
        {!! $serviceReport->updated_by !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Created At</strong>
    </div>
    <div class="t-cell">
        {!! $serviceReport->created_at !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Updated At</strong>
    </div>
    <div class="t-cell">
        {!! $serviceReport->updated_at !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Deleted At</strong>
    </div>
    <div class="t-cell">
        {!! $serviceReport->deleted_at !!}
    </div>
</div>

