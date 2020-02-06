<!-- Products Field -->
<div class="form-group col-sm-6">
    {!! Form::label('products_id', 'Products') !!}
    <select name="products_id" id="products_id" class="form-control chosen-select" data-placeholder="Select a Products">
     	<option></option>
        <option class="fly-add-option">Add a Products</option>
     	@foreach($products as $id => $name)
     		<option value="{{ $id }}" {{ isset($invoiceDetail) && $invoiceDetail->products_id == $id ? 'selected' : '' }}>{{ $name }}</option>
     	@endforeach
    </select>
    <input
        data-role="fly-add"
        data-target="#products_id"
        data-source="{{ route('products.create') }}"
        data-on-success="addNewOption"
        type="button"
        class="btn btn-success btn-xs fly-add hidden"
        value="Add New">
</div>

<!-- Invoice Field -->
<div class="form-group col-sm-6">
    {!! Form::label('invoice_id', 'Invoice') !!}
    <select name="invoice_id" id="invoice_id" class="form-control chosen-select" data-placeholder="Select a Invoice">
     	<option></option>
        <option class="fly-add-option">Add a Invoice</option>
     	@foreach($invoices as $id => $name)
     		<option value="{{ $id }}" {{ isset($invoiceDetail) && $invoiceDetail->invoice_id == $id ? 'selected' : '' }}>{{ $name }}</option>
     	@endforeach
    </select>
    <input
        data-role="fly-add"
        data-target="#invoice_id"
        data-source="{{ route('invoices.create') }}"
        data-on-success="addNewOption"
        type="button"
        class="btn btn-success btn-xs fly-add hidden"
        value="Add New">
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('amount') ? ' has-error' : '' }}">
        <label for="amount">Amount</label>
        <input name="amount" id="amount" class="form-control"
               value="{{ isset($invoiceDetail) ? $invoiceDetail->amount : old('amount') }}">
        @if ($errors->has('amount'))
            <small class="help-block">{{ $errors->first('amount') }}</small>
        @endif
    </div>
</div>

<!-- Vat Rate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vat_rate_id', 'Vat Rate') !!}
    <select name="vat_rate_id" id="vat_rate_id" class="form-control chosen-select" data-placeholder="Select a Vat Rate">
     	<option></option>
        <option class="fly-add-option">Add a Vat Rate</option>
     	@foreach($vatRates as $id => $name)
     		<option value="{{ $id }}" {{ isset($invoiceDetail) && $invoiceDetail->vat_rate_id == $id ? 'selected' : '' }}>{{ $name }}</option>
     	@endforeach
    </select>
    <input
        data-role="fly-add"
        data-target="#vat_rate_id"
        data-source="{{ route('vat-rates.create') }}"
        data-on-success="addNewOption"
        type="button"
        class="btn btn-success btn-xs fly-add hidden"
        value="Add New">
</div>

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('created_by') ? ' has-error' : '' }}">--}}
        {{--<label for="created_by">Created By</label>--}}
        {{--<input name="created_by" id="created_by" class="form-control"--}}
               {{--value="{{ isset($invoiceDetail) ? $invoiceDetail->created_by : old('created_by') }}">--}}
        {{--@if ($errors->has('created_by'))--}}
            {{--<small class="help-block">{{ $errors->first('created_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('updated_by') ? ' has-error' : '' }}">--}}
        {{--<label for="updated_by">Updated By</label>--}}
        {{--<input name="updated_by" id="updated_by" class="form-control"--}}
               {{--value="{{ isset($invoiceDetail) ? $invoiceDetail->updated_by : old('updated_by') }}">--}}
        {{--@if ($errors->has('updated_by'))--}}
            {{--<small class="help-block">{{ $errors->first('updated_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}