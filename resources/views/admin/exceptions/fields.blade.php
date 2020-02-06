<div class="col-sm-6">
    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name">Name</label>
        <input name="name" id="name" class="form-control"
               value="{{ isset($priceband) ? $priceband->name : old('name') }}">
        @if ($errors->has('name'))
            <small class="help-block">{{ $errors->first('name') }}</small>
        @endif
    </div>
</div>