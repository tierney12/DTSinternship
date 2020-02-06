<div class="t-row">
    <div class="t-cell text-right">
        <strong>Id</strong>
    </div>
    <div class="t-cell">
        {!! $invoiceDetail->id !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Products</strong>
    </div>
    <div class="t-cell">
        {!! $invoiceDetail->products->name !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Invoice</strong>
    </div>
    <div class="t-cell">
        {!! $invoiceDetail->invoice->name !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Amount</strong>
    </div>
    <div class="t-cell">
        {!! $invoiceDetail->amount !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Vat Rate</strong>
    </div>
    <div class="t-cell">
        {!! $invoiceDetail->vatRate->name !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Created By</strong>
    </div>
    <div class="t-cell">
        {!! $invoiceDetail->created_by !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Updated By</strong>
    </div>
    <div class="t-cell">
        {!! $invoiceDetail->updated_by !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Created At</strong>
    </div>
    <div class="t-cell">
        {!! $invoiceDetail->created_at !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Updated At</strong>
    </div>
    <div class="t-cell">
        {!! $invoiceDetail->updated_at !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Deleted At</strong>
    </div>
    <div class="t-cell">
        {!! $invoiceDetail->deleted_at !!}
    </div>
</div>

