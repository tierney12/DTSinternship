<!-- Stock Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stock_id', 'Stock') !!}
    <select name="stock_id" id="stock_id" class="form-control chosen-select" data-placeholder="Select a Stock">
     	<option></option>
        <option class="fly-add-option">Add a Stock</option>
     	@foreach($stocks as $id => $name)
     		<option value="{{ $id }}" {{ isset($stockPriceband) && $stockPriceband->stock_id == $id ? 'selected' : '' }}>{{ $name }}</option>
     	@endforeach
    </select>
    <input
        data-role="fly-add"
        data-target="#stock_id"
        data-source="{{ route('stocks.create') }}"
        data-on-success="addNewOption"
        type="button"
        class="btn btn-success btn-xs fly-add hidden"
        value="Add New">
</div>

<!-- Priceband Field -->
<div class="form-group col-sm-6">
    {!! Form::label('priceband_id', 'Priceband') !!}
    <select name="priceband_id" id="priceband_id" class="form-control chosen-select" data-placeholder="Select a Priceband">
     	<option></option>
        <option class="fly-add-option">Add a Priceband</option>
     	@foreach($pricebands as $id => $name)
     		<option value="{{ $id }}" {{ isset($stockPriceband) && $stockPriceband->priceband_id == $id ? 'selected' : '' }}>{{ $name }}</option>
     	@endforeach
    </select>
    <input
        data-role="fly-add"
        data-target="#priceband_id"
        data-source="{{ route('pricebands.create') }}"
        data-on-success="addNewOption"
        type="button"
        class="btn btn-success btn-xs fly-add hidden"
        value="Add New">
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('price') ? ' has-error' : '' }}">
        <label for="price">Price</label>
        <input name="price" id="price" class="form-control"
               value="{{ isset($stockPriceband) ? $stockPriceband->price : old('price') }}">
        @if ($errors->has('price'))
            <small class="help-block">{{ $errors->first('price') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('created_by') ? ' has-error' : '' }}">
        <label for="created_by">Created By</label>
        <input name="created_by" id="created_by" class="form-control"
               value="{{ isset($stockPriceband) ? $stockPriceband->created_by : old('created_by') }}">
        @if ($errors->has('created_by'))
            <small class="help-block">{{ $errors->first('created_by') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('updated_by') ? ' has-error' : '' }}">
        <label for="updated_by">Updated By</label>
        <input name="updated_by" id="updated_by" class="form-control"
               value="{{ isset($stockPriceband) ? $stockPriceband->updated_by : old('updated_by') }}">
        @if ($errors->has('updated_by'))
            <small class="help-block">{{ $errors->first('updated_by') }}</small>
        @endif
    </div>
</div>