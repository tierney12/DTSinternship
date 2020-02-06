<div class="t-row">
    <div class="t-cell text-right">
        <strong>Id</strong>
    </div>
    <div class="t-cell">
        {!! $dentist->id !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Account Number</strong>
    </div>
    <div class="t-cell">
        {!! $dentist->account_number !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Customer Since</strong>
    </div>
    <div class="t-cell">
        {!! $dentist->customer_since !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Active</strong>
    </div>
    <div class="t-cell">
        {!! $dentist->active !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Mailing List Opt In</strong>
    </div>
    <div class="t-cell">
        {!! $dentist->mailing_list_opt_in !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Title</strong>
    </div>
    <div class="t-cell">
        {!! $dentist->title !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Firstname</strong>
    </div>
    <div class="t-cell">
        {!! $dentist->firstname !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Surname</strong>
    </div>
    <div class="t-cell">
        {!! $dentist->surname !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Phone Number</strong>
    </div>
    <div class="t-cell">
        {!! $dentist->phone_number !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Mobile Number</strong>
    </div>
    <div class="t-cell">
        {!! $dentist->mobile_number !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Vocational Training</strong>
    </div>
    <div class="t-cell">
        {!! $dentist->vocational_training !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Essential Account</strong>
    </div>
    <div class="t-cell">
        {!! $dentist->essential_account !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Preferences</strong>
    </div>
    <div class="t-cell">
        {!! $dentist->preferences !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Recall Month</strong>
    </div>
    <div class="t-cell">
        {!! $dentist->recall_month !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Email</strong>
    </div>
    <div class="t-cell">
        {!! $dentist->email !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Gdc Number</strong>
    </div>
    <div class="t-cell">
        {!! $dentist->gdc_number !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Practice</strong>
    </div>
    <div class="t-cell">
        {!! $dentist->practice->name !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Address</strong>
    </div>
    <div class="t-cell">
        {!! $dentist->address->address_line_1 . " , " . $dentist->address->address_line_2 . " , " . $dentist->address->post_code !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Area</strong>
    </div>
    <div class="t-cell">
        {!! $dentist->area->Area !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Dentist Status</strong>
    </div>
    <div class="t-cell">
        {!! $dentist->dentistStatus->name !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Priceband</strong>
    </div>
    <div class="t-cell">
        {!! $dentist->priceband->name !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Created By</strong>
    </div>
    <div class="t-cell">
        {!! $dentist->created_by !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Updated By</strong>
    </div>
    <div class="t-cell">
        {!! $dentist->updated_by !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Created At</strong>
    </div>
    <div class="t-cell">
        {!! $dentist->created_at !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Updated At</strong>
    </div>
    <div class="t-cell">
        {!! $dentist->updated_at !!}
    </div>
</div>

<div class="t-row">
    <div class="t-cell text-right">
        <strong>Deleted At</strong>
    </div>
    <div class="t-cell">
        {!! $dentist->deleted_at !!}
    </div>
</div>

