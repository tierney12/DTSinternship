<div class="t-row">
    <div class="t-cell text-right">
        <strong>Id</strong>
    </div>
    <div class="t-cell">
        {!! $estimate->id !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Dentist</strong>
    </div>
    <div class="t-cell">
        {!! $estimate->dentist->name !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Job Layout</strong>
    </div>
    <div class="t-cell">
        {!! $estimate->jobLayout->name !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Created By</strong>
    </div>
    <div class="t-cell">
        {!! $estimate->created_by !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Updated By</strong>
    </div>
    <div class="t-cell">
        {!! $estimate->updated_by !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Created At</strong>
    </div>
    <div class="t-cell">
        {!! $estimate->created_at !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Updated At</strong>
    </div>
    <div class="t-cell">
        {!! $estimate->updated_at !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Deleted At</strong>
    </div>
    <div class="t-cell">
        {!! $estimate->deleted_at !!}
    </div>
</div>

