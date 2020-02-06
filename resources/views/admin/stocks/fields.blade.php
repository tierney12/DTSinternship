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

<!-- Stock Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stock_code', 'Stock Code') !!}
    <input type="number" name="stock_code" id="stock_code" class="form-control" data-placeholder="Enter Stock Code">
    </input>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('department') ? ' has-error' : '' }}">
        <label for="department">Department</label>
        <input name="department" id="department" class="form-control"
               value="{{ isset($stockPriceband) ? $stockPriceband->department : old('department') }}">
        @if ($errors->has('department'))
            <small class="help-block">{{ $errors->first('department') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('stock_description') ? ' has-error' : '' }}">
        <label for="stock_description">Stock Description</label>
        <input name="stock_description" id="stock_description" class="form-control"
               value="{{ isset($stockPriceband) ? $stockPriceband->stock_description : old('stock_description') }}">
        @if ($errors->has('stock_description'))
            <small class="help-block">{{ $errors->first('stock_description') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('idh_code') ? ' has-error' : '' }}">
        <label for="idh_code">Idh Code</label>
        <input name="idh_code" id="idh_code" class="form-control"
               value="{{ isset($stockPriceband) ? $stockPriceband->idh_code : old('idh_code') }}">
        @if ($errors->has('idh_code'))
            <small class="help-block">{{ $errors->first('idh_code') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('nhs_code') ? ' has-error' : '' }}">
        <label for="nhs_code">Nhs Code</label>
        <input name="nhs_code" id="nhs_code" class="form-control"
               value="{{ isset($stockPriceband) ? $stockPriceband->nhs_code : old('nhs_code') }}">
        @if ($errors->has('nhs_code'))
            <small class="help-block">{{ $errors->first('nhs_code') }}</small>
        @endif
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="crown" value="0">
            <input id="crown"
                   type="checkbox"
                   name="crown"
                   value="1" {{ isset($stockPriceband) ? ($stockPriceband->crown ? 'checked' : '') : '' }}>
            <label for="crown">Crown</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="bridge" value="0">
            <input id="bridge"
                   type="checkbox"
                   name="bridge"
                   value="1" {{ isset($stockPriceband) ? ($stockPriceband->bridge ? 'checked' : '') : '' }}>
            <label for="bridge">Bridge</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="inlay_onlay" value="0">
            <input id="inlay_onlay"
                   type="checkbox"
                   name="inlay_onlay"
                   value="1" {{ isset($stockPriceband) ? ($stockPriceband->inlay_onlay ? 'checked' : '') : '' }}>
            <label for="inlay_onlay">Inlay Onlay</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="post_core" value="0">
            <input id="post_core"
                   type="checkbox"
                   name="post_core"
                   value="1" {{ isset($stockPriceband) ? ($stockPriceband->post_core ? 'checked' : '') : '' }}>
            <label for="post_core">Post Core</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="ptm_non_precious" value="0">
            <input id="ptm_non_precious"
                   type="checkbox"
                   name="ptm_non_precious"
                   value="1" {{ isset($stockPriceband) ? ($stockPriceband->ptm_non_precious ? 'checked' : '') : '' }}>
            <label for="ptm_non_precious">Ptm Non Precious</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="ptm_argelite_54B" value="0">
            <input id="ptm_argelite_54B"
                   type="checkbox"
                   name="ptm_argelite_54B"
                   value="1" {{ isset($stockPriceband) ? ($stockPriceband->ptm_argelite_54B ? 'checked' : '') : '' }}>
            <label for="ptm_argelite_54B">Ptm Argelite 54B</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="ptm_argedent_EURO" value="0">
            <input id="ptm_argedent_EURO"
                   type="checkbox"
                   name="ptm_argedent_EURO"
                   value="1" {{ isset($stockPriceband) ? ($stockPriceband->ptm_argedent_EURO ? 'checked' : '') : '' }}>
            <label for="ptm_argedent_EURO">Ptm Argedent Euro</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="ptm_argedent_52" value="0">
            <input id="ptm_argedent_52"
                   type="checkbox"
                   name="ptm_argedent_52"
                   value="1" {{ isset($stockPriceband) ? ($stockPriceband->ptm_argedent_52 ? 'checked' : '') : '' }}>
            <label for="ptm_argedent_52">Ptm Argedent 52</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="ptm_argedent_75" value="0">
            <input id="ptm_argedent_75"
                   type="checkbox"
                   name="ptm_argedent_75"
                   value="1" {{ isset($stockPriceband) ? ($stockPriceband->ptm_argedent_75 ? 'checked' : '') : '' }}>
            <label for="ptm_argedent_75">Ptm Argedent 75</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="ptm_argedent_86" value="0">
            <input id="ptm_argedent_86"
                   type="checkbox"
                   name="ptm_argedent_86"
                   value="1" {{ isset($stockPriceband) ? ($stockPriceband->ptm_argedent_86 ? 'checked' : '') : '' }}>
            <label for="ptm_argedent_86">Ptm Argedent 86</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="ptm_captek" value="0">
            <input id="ptm_captek"
                   type="checkbox"
                   name="ptm_captek"
                   value="1" {{ isset($stockPriceband) ? ($stockPriceband->ptm_captek ? 'checked' : '') : '' }}>
            <label for="ptm_captek">Ptm Captek</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="fcc_non_precious" value="0">
            <input id="fcc_non_precious"
                   type="checkbox"
                   name="fcc_non_precious"
                   value="1" {{ isset($stockPriceband) ? ($stockPriceband->fcc_non_precious ? 'checked' : '') : '' }}>
            <label for="fcc_non_precious">Fcc Non Precious</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="fcc_non_precious_yellow" value="0">
            <input id="fcc_non_precious_yellow"
                   type="checkbox"
                   name="fcc_non_precious_yellow"
                   value="1" {{ isset($stockPriceband) ? ($stockPriceband->fcc_non_precious_yellow ? 'checked' : '') : '' }}>
            <label for="fcc_non_precious_yellow">Fcc Non Precious Yellow</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="fcc_argelite_54B" value="0">
            <input id="fcc_argelite_54B"
                   type="checkbox"
                   name="fcc_argelite_54B"
                   value="1" {{ isset($stockPriceband) ? ($stockPriceband->fcc_argelite_54B ? 'checked' : '') : '' }}>
            <label for="fcc_argelite_54B">Fcc Argelite 54B</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="fcc_argenco_Y" value="0">
            <input id="fcc_argenco_Y"
                   type="checkbox"
                   name="fcc_argenco_Y"
                   value="1" {{ isset($stockPriceband) ? ($stockPriceband->fcc_argenco_Y ? 'checked' : '') : '' }}>
            <label for="fcc_argenco_Y">Fcc Argenco Y</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="fcc_argenco_20" value="0">
            <input id="fcc_argenco_20"
                   type="checkbox"
                   name="fcc_argenco_20"
                   value="1" {{ isset($stockPriceband) ? ($stockPriceband->fcc_argenco_20 ? 'checked' : '') : '' }}>
            <label for="fcc_argenco_20">Fcc Argenco 20</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="fcc_argenco_52" value="0">
            <input id="fcc_argenco_52"
                   type="checkbox"
                   name="fcc_argenco_52"
                   value="1" {{ isset($stockPriceband) ? ($stockPriceband->fcc_argenco_52 ? 'checked' : '') : '' }}>
            <label for="fcc_argenco_52">Fcc Argenco 52</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="fcc_argenco_75" value="0">
            <input id="fcc_argenco_75"
                   type="checkbox"
                   name="fcc_argenco_75"
                   value="1" {{ isset($stockPriceband) ? ($stockPriceband->fcc_argenco_75 ? 'checked' : '') : '' }}>
            <label for="fcc_argenco_75">Fcc Argenco 75</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="ac_e_max" value="0">
            <input id="ac_e_max"
                   type="checkbox"
                   name="ac_e_max"
                   value="1" {{ isset($stockPriceband) ? ($stockPriceband->ac_e_max ? 'checked' : '') : '' }}>
            <label for="ac_e_max">Ac E Max</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="ac_venner" value="0">
            <input id="ac_venner"
                   type="checkbox"
                   name="ac_venner"
                   value="1" {{ isset($stockPriceband) ? ($stockPriceband->ac_venner ? 'checked' : '') : '' }}>
            <label for="ac_venner">Ac Venner</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="ac_full_zirconia" value="0">
            <input id="ac_full_zirconia"
                   type="checkbox"
                   name="ac_full_zirconia"
                   value="1" {{ isset($stockPriceband) ? ($stockPriceband->ac_full_zirconia ? 'checked' : '') : '' }}>
            <label for="ac_full_zirconia">Ac Full Zirconia</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="ac_zirconia" value="0">
            <input id="ac_zirconia"
                   type="checkbox"
                   name="ac_zirconia"
                   value="1" {{ isset($stockPriceband) ? ($stockPriceband->ac_zirconia ? 'checked' : '') : '' }}>
            <label for="ac_zirconia">Ac Zirconia</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="ac_composite" value="0">
            <input id="ac_composite"
                   type="checkbox"
                   name="ac_composite"
                   value="1" {{ isset($stockPriceband) ? ($stockPriceband->ac_composite ? 'checked' : '') : '' }}>
            <label for="ac_composite">Ac Composite</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="oth_temporary_crown" value="0">
            <input id="oth_temporary_crown"
                   type="checkbox"
                   name="oth_temporary_crown"
                   value="1" {{ isset($stockPriceband) ? ($stockPriceband->oth_temporary_crown ? 'checked' : '') : '' }}>
            <label for="oth_temporary_crown">Oth Temporary Crown</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="checkbox checkbox-wl">
            <input type="hidden" name="oth_diagnostic_wax_up" value="0">
            <input id="oth_diagnostic_wax_up"
                   type="checkbox"
                   name="oth_diagnostic_wax_up"
                   value="1" {{ isset($stockPriceband) ? ($stockPriceband->oth_diagnostic_wax_up ? 'checked' : '') : '' }}>
            <label for="oth_diagnostic_wax_up">Oth Diagnostic Wax Up</label>
        </div>
    </div>
</div>

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('created_by') ? ' has-error' : '' }}">--}}
        {{--<label for="created_by">Created By</label>--}}
        {{--<input name="created_by" id="created_by" class="form-control"--}}
               {{--value="{{ isset($stockPriceband) ? $stockPriceband->created_by : old('created_by') }}">--}}
        {{--@if ($errors->has('created_by'))--}}
            {{--<small class="help-block">{{ $errors->first('created_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('updated_by') ? ' has-error' : '' }}">--}}
        {{--<label for="updated_by">Updated By</label>--}}
        {{--<input name="updated_by" id="updated_by" class="form-control"--}}
               {{--value="{{ isset($stockPriceband) ? $stockPriceband->updated_by : old('updated_by') }}">--}}
        {{--@if ($errors->has('updated_by'))--}}
            {{--<small class="help-block">{{ $errors->first('updated_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}