<div class="t-row">
    <div class="t-cell text-right">
        <strong>Id</strong>
    </div>
    <div class="t-cell">
        {!! $permissionUser->id !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Permission</strong>
    </div>
    <div class="t-cell">
        {!! $permissionUser->permission->name !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>User</strong>
    </div>
    <div class="t-cell">
        {!! $permissionUser->user->name !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Created At</strong>
    </div>
    <div class="t-cell">
        {!! $permissionUser->created_at !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Updated At</strong>
    </div>
    <div class="t-cell">
        {!! $permissionUser->updated_at !!}
    </div>
</div>

