<div class="t-row">
    <div class="t-cell text-right">
        <strong>Id</strong>
    </div>
    <div class="t-cell">
        {!! $department->id !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Name</strong>
    </div>
    <div class="t-cell">
        {!! $department->name !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Checklist</strong>
    </div>
    <div class="t-cell">
        {!! $department->checklist->name !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Crown Bridge Work</strong>
    </div>
    <div class="t-cell">
        {!! $department->crown_bridge_work !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Pros Work</strong>
    </div>
    <div class="t-cell">
        {!! $department->pros_work !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Created By</strong>
    </div>
    <div class="t-cell">
        {!! $department->created_by !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Updated By</strong>
    </div>
    <div class="t-cell">
        {!! $department->updated_by !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Created At</strong>
    </div>
    <div class="t-cell">
        {!! $department->created_at !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Updated At</strong>
    </div>
    <div class="t-cell">
        {!! $department->updated_at !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Deleted At</strong>
    </div>
    <div class="t-cell">
        {!! $department->deleted_at !!}
    </div>
</div>

