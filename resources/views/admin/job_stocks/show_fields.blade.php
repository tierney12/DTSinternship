<div class="t-row">
    <div class="t-cell text-right">
        <strong>Created At</strong>
    </div>
    <div class="t-cell">
        {!! $jobStock->created_at !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Created By</strong>
    </div>
    <div class="t-cell">
        {!! $jobStock->created_by !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Deleted At</strong>
    </div>
    <div class="t-cell">
        {!! $jobStock->deleted_at !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Id</strong>
    </div>
    <div class="t-cell">
        {!! $jobStock->id !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Job</strong>
    </div>
    <div class="t-cell">
        {!! $jobStock->job->name !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Stock</strong>
    </div>
    <div class="t-cell">
        {!! $jobStock->stock->name !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Units</strong>
    </div>
    <div class="t-cell">
        {!! $jobStock->units !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Updated At</strong>
    </div>
    <div class="t-cell">
        {!! $jobStock->updated_at !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Updated By</strong>
    </div>
    <div class="t-cell">
        {!! $jobStock->updated_by !!}
    </div>
</div>

