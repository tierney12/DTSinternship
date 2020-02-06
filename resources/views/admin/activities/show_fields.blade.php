<div class="t-row">
    <div class="t-cell text-right">
        <strong>Id</strong>
    </div>
    <div class="t-cell">
        {!! $activity->id !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Created By</strong>
    </div>
    <div class="t-cell">
        {!! $activity->created_by !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Updated By</strong>
    </div>
    <div class="t-cell">
        {!! $activity->updated_by !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Dentist</strong>
    </div>
    <div class="t-cell">
        {!! $activity->dentist->name !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Created At</strong>
    </div>
    <div class="t-cell">
        {!! $activity->created_at !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Updated At</strong>
    </div>
    <div class="t-cell">
        {!! $activity->updated_at !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Deleted At</strong>
    </div>
    <div class="t-cell">
        {!! $activity->deleted_at !!}
    </div>
</div>

