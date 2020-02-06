<div class="t-row">
    <div class="t-cell text-right">
        <strong>Id</strong>
    </div>
    <div class="t-cell">
        {!! $roleUser->id !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Role</strong>
    </div>
    <div class="t-cell">
        {!! $roleUser->role->name !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>User</strong>
    </div>
    <div class="t-cell">
        {!! $roleUser->user->name !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Created At</strong>
    </div>
    <div class="t-cell">
        {!! $roleUser->created_at !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Updated At</strong>
    </div>
    <div class="t-cell">
        {!! $roleUser->updated_at !!}
    </div>
</div>

