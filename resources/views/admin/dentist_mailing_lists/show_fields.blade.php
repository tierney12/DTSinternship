<div class="t-row">
    <div class="t-cell text-right">
        <strong>Id</strong>
    </div>
    <div class="t-cell">
        {!! $dentistMailingList->id !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Dentist</strong>
    </div>
    <div class="t-cell">
        {!! $dentistMailingList->dentist->name !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Mailing List</strong>
    </div>
    <div class="t-cell">
        {!! $dentistMailingList->mailingList->name !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Created By</strong>
    </div>
    <div class="t-cell">
        {!! $dentistMailingList->created_by !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Updated By</strong>
    </div>
    <div class="t-cell">
        {!! $dentistMailingList->updated_by !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Created At</strong>
    </div>
    <div class="t-cell">
        {!! $dentistMailingList->created_at !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Updated At</strong>
    </div>
    <div class="t-cell">
        {!! $dentistMailingList->updated_at !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Deleted At</strong>
    </div>
    <div class="t-cell">
        {!! $dentistMailingList->deleted_at !!}
    </div>
</div>

