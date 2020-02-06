<div class="col-sm-6">
    <div class="form-group {{ $errors->has('stock_code') ? ' has-error' : '' }}">
        <label for="stock_code">Stock Code</label>
        <input name="stock_code" id="stock_code" class="form-control"
               value="{{ isset($product) ? $product->stock_code : old('stock_code') }}">
        @if ($errors->has('stock_code'))
            <small class="help-block">{{ $errors->first('stock_code') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
        <label for="description">Description</label>
        <input name="description" id="description" class="form-control"
               value="{{ isset($product) ? $product->description : old('description') }}">
        @if ($errors->has('description'))
            <small class="help-block">{{ $errors->first('description') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('type') ? ' has-error' : '' }}">
        <label for="type">Type</label>
        <input name="type" id="type" class="form-control"
               value="{{ isset($product) ? $product->type : old('type') }}">
        @if ($errors->has('type'))
            <small class="help-block">{{ $errors->first('type') }}</small>
        @endif
    </div>
</div>

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('created_by') ? ' has-error' : '' }}">--}}
        {{--<label for="created_by">Created By</label>--}}
        {{--<input name="created_by" id="created_by" class="form-control"--}}
               {{--value="{{ isset($product) ? $product->created_by : old('created_by') }}">--}}
        {{--@if ($errors->has('created_by'))--}}
            {{--<small class="help-block">{{ $errors->first('created_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('updated_by') ? ' has-error' : '' }}">--}}
        {{--<label for="updated_by">Updated By</label>--}}
        {{--<input name="updated_by" id="updated_by" class="form-control"--}}
               {{--value="{{ isset($product) ? $product->updated_by : old('updated_by') }}">--}}
        {{--@if ($errors->has('updated_by'))--}}
            {{--<small class="help-block">{{ $errors->first('updated_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}