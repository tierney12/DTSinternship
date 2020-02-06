<div class="t-row">
    <div class="t-cell text-right">
        <strong>Id</strong>
    </div>
    <div class="t-cell">
        {!! $jobWork->id !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Job</strong>
    </div>
    <div class="t-cell">
        {!! $jobWork->job->name !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Pros Work</strong>
    </div>
    <div class="t-cell">
        {!! $jobWork->prosWork->name !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Crown Bridge Work</strong>
    </div>
    <div class="t-cell">
        {!! $jobWork->crownBridgeWork->name !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Created By</strong>
    </div>
    <div class="t-cell">
        {!! $jobWork->created_by !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Updated By</strong>
    </div>
    <div class="t-cell">
        {!! $jobWork->updated_by !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Created At</strong>
    </div>
    <div class="t-cell">
        {!! $jobWork->created_at !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Updated At</strong>
    </div>
    <div class="t-cell">
        {!! $jobWork->updated_at !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Deleted At</strong>
    </div>
    <div class="t-cell">
        {!! $jobWork->deleted_at !!}
    </div>
</div>

