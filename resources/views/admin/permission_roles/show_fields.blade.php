<div class="t-row">
    <div class="t-cell text-right">
        <strong>Id</strong>
    </div>
    <div class="t-cell">
        {!! $permissionRole->id !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Permission</strong>
    </div>
    <div class="t-cell">
        {!! $permissionRole->permission->name !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Role</strong>
    </div>
    <div class="t-cell">
        {!! $permissionRole->role->name !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Created At</strong>
    </div>
    <div class="t-cell">
        {!! $permissionRole->created_at !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Updated At</strong>
    </div>
    <div class="t-cell">
        {!! $permissionRole->updated_at !!}
    </div>
</div>

