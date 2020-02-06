<div class="t-row">
    <div class="t-cell text-right">
        <strong>Id</strong>
    </div>
    <div class="t-cell">
        {!! $payment->id !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Transaction</strong>
    </div>
    <div class="t-cell">
        {!! $payment->transaction->name !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Practice</strong>
    </div>
    <div class="t-cell">
        {!! $payment->practice->name !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Amount</strong>
    </div>
    <div class="t-cell">
        {!! $payment->amount !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Created By</strong>
    </div>
    <div class="t-cell">
        {!! $payment->created_by !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Updated By</strong>
    </div>
    <div class="t-cell">
        {!! $payment->updated_by !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Created At</strong>
    </div>
    <div class="t-cell">
        {!! $payment->created_at !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Updated At</strong>
    </div>
    <div class="t-cell">
        {!! $payment->updated_at !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Deleted At</strong>
    </div>
    <div class="t-cell">
        {!! $payment->deleted_at !!}
    </div>
</div>

