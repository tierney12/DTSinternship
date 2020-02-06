@php
    $staff = App\Models\Staff::get();
@endphp

<div class="row">
    <div class="col-sm-12">
        <div id="models_tech" class="form-group col-sm-3">
            <div class="form-group col-sm-12">
                {!! Form::label('models_tech', 'Models Tech') !!}
                <select name="cb[models_tech]" id="models_tech" class="chosen-select" data-placeholder="">
                    <option value=""></option>
                    @foreach($staff as $staffmember)
                        <option value="{{ $staffmember->id }}" {{ isset($cb_work) && $cb_work->models_tech == $staffmember->id ? 'selected' : '' }}>{{ $staffmember->tech }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group {{ $errors->has('models_units') ? ' has-error' : '' }}">
                <label for="models_units">Models Units</label>
                <input name="cb[models_units]" id="models_units" class="form-control"
                       value="{{ isset($cb_work) ? $cb_work->models_units : old('models_units') }}">
                @if ($errors->has('models_units'))
                    <small class="help-block">{{ $errors->first('models_units') }}</small>
                @endif
            </div>
        </div>

        <div class="col-sm-1"></div>

        <div id="opaque_tech" class="form-group col-sm-3">
            <div class="form-group col-sm-12">
                {!! Form::label('opaque_tech', 'Opaque Tech') !!}
                <select name="cb[opaque_tech]" id="opaque_tech" class="form-control chosen-select" data-placeholder="">
                    <option value=""></option>
                    @foreach($staff as $staffmember)
                        <option value="{{ $staffmember->id }}" {{ isset($cb_work) && $cb_work->opaque_tech == $staffmember->id ? 'selected' : '' }}>{{ $staffmember->tech }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group {{ $errors->has('opaque_units') ? ' has-error' : '' }}">
                <label for="opaque_units">Opaque Units</label>
                <input name="cb[opaque_units]" id="opaque_units" class="form-control"
                       value="{{ isset($cb_work) ? $cb_work->opaque_units : old('opaque_units') }}">
                @if ($errors->has('opaque_units'))
                    <small class="help-block">{{ $errors->first('opaque_units') }}</small>
                @endif
            </div>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-sm-12">

        <div id="trim_die_tech" class="form-group col-sm-3">
            <div class="form-group col-sm-12">
                {!! Form::label('trim_die_tech', 'Trim Die Tech') !!}
                <select name="cb[trim_die_tech]" id="trim_die_tech" class="form-control chosen-select" data-placeholder="">
                    <option value=""></option>
                    @foreach($staff as $staffmember)
                        <option value="{{ $staffmember->id }}" {{ isset($cb_work) && $cb_work->trim_die_tech == $staffmember->id ? 'selected' : '' }}>{{ $staffmember->tech }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group {{ $errors->has('trim_die_units') ? ' has-error' : '' }}">
                <label for="trim_die_units">Trim Die Units</label>
                <input name="cb[trim_die_units]" id="trim_die_units" class="form-control"
                       value="{{ isset($cb_work) ? $cb_work->trim_die_units : old('trim_die_units') }}">
                @if ($errors->has('trim_die_units'))
                    <small class="help-block">{{ $errors->first('trim_die_units') }}</small>
                @endif
            </div>
        </div>


        <div class="col-sm-1"></div>

        <div id="build_up_tech" class="form-group col-sm-3">
            <div class="form-group col-sm-12">
                {!! Form::label('build_up_tech', 'Build up Tech') !!}
                <select name="cb[build_up_tech]" id="build_up_tech" class="form-control chosen-select" data-placeholder="">
                    <option value=""></option>
                    @foreach($staff as $staffmember)
                        <option value="{{ $staffmember->id }} {{ isset($cb_work) && $cb_work->build_up_tech == $staffmember->id ? 'selected' : '' }}">{{ $staffmember->tech }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group {{ $errors->has('build_up_units') ? ' has-error' : '' }}">
                <label for="build_up_units">Build Up Units</label>
                <input name="cb[build_up_units]" id="build_up_units" class="form-control"
                       value="{{ isset($cb_work) ? $cb_work->build_up_units : old('build_up_units') }}">
                @if ($errors->has('build_up_units'))
                    <small class="help-block">{{ $errors->first('build_up_units') }}</small>
                @endif
            </div>
        </div>


    </div>
</div>


<div class="row">
    <div class="col-sm-12">

        <div id="cb_articulate_tech" class="form-group col-sm-3">
            <div class="form-group col-sm-12">
                {!! Form::label('articulate_tech', 'Articulate Tech') !!}
                <select name="cb[articulate_tech]" id="articulate_tech" class="form-control chosen-select" data-placeholder="">
                    <option value=""></option>
                    @foreach($staff as $staffmember)
                        <option value="{{ $staffmember->id }}" {{ isset($cb_work) && $cb_work->articulate_tech == $staffmember->id ? 'selected' : '' }}>{{ $staffmember->tech }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group {{ $errors->has('articulate_units') ? ' has-error' : '' }}">
                <label for="articulate_units">Articulate Units</label>
                <input name="cb[articulate_units]" id="articulate_units" class="form-control"
                       value="{{ isset($cb_work) ? $cb_work->articulate_units : old('articulate_units') }}">
                @if ($errors->has('articulate_units'))
                    <small class="help-block">{{ $errors->first('articulate_units') }}</small>
                @endif
            </div>
        </div>



        <div class="col-sm-1"></div>

        <div id="stone/grind_in_tech" class="form-group col-sm-3">
            <div class="form-group col-sm-12">
                {!! Form::label('stone_grind_in_tech', 'Stone/Grind in Tech') !!}
                <select name="cb[stone_grind_in_tech]" id="stone_grind_in_tech" class="form-control chosen-select" data-placeholder="">
                    <option value=""></option>
                    @foreach($staff as $staffmember)
                        <option value="{{ $staffmember->id }}" {{ isset($cb_work) && $cb_work->stone_grind_in_tech == $staffmember->id ? 'selected' : '' }}>{{ $staffmember->tech }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group {{ $errors->has('stone_grind_in_units') ? ' has-error' : '' }}">
                <label for="stone_grind_in_units">Stone/Grind In Units</label>
                <input name="cb[stone_grind_in_units]" id="stone_grind_in_units" class="form-control"
                       value="{{ isset($cb_work) ? $cb_work->stone_grind_in_units : old('stone_grind_in_units') }}">
                @if ($errors->has('stone_grind_in_units'))
                    <small class="help-block">{{ $errors->first('stone_grind_in_units') }}</small>
                @endif
            </div>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-sm-12">

        <div id="scan_tech" class="form-group col-sm-3">
            <div class="form-group col-sm-12">
                {!! Form::label('scan_tech', 'Scan Tech') !!}
                <select name="cb[scan_tech]" id="scan_tech" class="form-control chosen-select" data-placeholder="">
                    <option value=""></option>
                    @foreach($staff as $staffmember)
                        <option value="{{ $staffmember->id }}" {{ isset($cb_work) && $cb_work->scan_tech == $staffmember->id ? 'selected' : '' }}>{{ $staffmember->tech }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group {{ $errors->has('scan_units') ? ' has-error' : '' }}">
                <label for="scan_units">Scan Units</label>
                <input name="cb[scan_units]" id="scan_units" class="form-control"
                       value="{{ isset($cb_work) ? $cb_work->scan_units : old('scan_units') }}">
                @if ($errors->has('scan_units'))
                    <small class="help-block">{{ $errors->first('scan_units') }}</small>
                @endif
            </div>
        </div>

        <div class="col-sm-1"></div>

        <div id="glaze_tech" class="form-group col-sm-3">
            <div class="form-group col-sm-12">
                {!! Form::label('glaze_tech', 'Glaze Tech') !!}
                <select name="cb[glaze_tech]" id="glaze_tech" class="form-control chosen-select" data-placeholder="">
                    <option value=""></option>
                    @foreach($staff as $staffmember)
                        <option value="{{ $staffmember->id }}" {{ isset($cb_work) && $cb_work->glaze_tech == $staffmember->id ? 'selected' : '' }}>{{ $staffmember->tech }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group {{ $errors->has('glaze_units') ? ' has-error' : '' }}">
                <label for="glaze_units">Glaze Units</label>
                <input name="cb[glaze_units]" id="glaze_units" class="form-control"
                       value="{{ isset($cb_work) ? $cb_work->glaze_units : old('glaze_units') }}">
                @if ($errors->has('glaze_units'))
                    <small class="help-block">{{ $errors->first('glaze_units') }}</small>
                @endif
            </div>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-sm-12">

        <div id="gold_work_tech" class="form-group col-sm-3">
            <div class="form-group col-sm-12">
                {!! Form::label('gold_work_tech', 'Gold Work Tech') !!}
                <select name="cb[gold_work_tech]" id="gold_work_tech" class="form-control chosen-select" data-placeholder="">
                    <option value=""></option>
                    @foreach($staff as $staffmember)
                        <option value="{{ $staffmember->id }}" {{ isset($cb_work) && $cb_work->gold_work_tech == $staffmember->id ? 'selected' : '' }}>{{ $staffmember->tech }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group {{ $errors->has('gold_work_units') ? ' has-error' : '' }}">
                <label for="gold_work_units">Gold Work Units</label>
                <input name="cb[gold_work_units]" id="gold_work_units" class="form-control"
                       value="{{ isset($cb_work) ? $cb_work->gold_work_units : old('gold_work_units') }}">
                @if ($errors->has('gold_work_units'))
                    <small class="help-block">{{ $errors->first('gold_work_units') }}</small>
                @endif
            </div>
        </div>

        <div class="col-sm-1"></div>

        <div id="fit_tech" class="form-group col-sm-3">
            <div class="form-group col-sm-12">
                {!! Form::label('fit_tech', 'Fit Tech') !!}
                <select name="cb[fit_tech]" id="fit_tech" class="form-control chosen-select" data-placeholder="">
                    <option value=""></option>
                    @foreach($staff as $staffmember)
                        <option value="{{ $staffmember->id }}" {{ isset($cb_work) && $cb_work->fit_tech == $staffmember->id ? 'selected' : '' }}>{{ $staffmember->tech }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group {{ $errors->has('fit_units') ? ' has-error' : '' }}">
                <label for="fit_units">Fit Units</label>
                <input name="cb[fit_units]" id="fit_units" class="form-control"
                       value="{{ isset($cb_work) ? $cb_work->fit_units : old('fit_units') }}">
                @if ($errors->has('fit_units'))
                    <small class="help-block">{{ $errors->first('fit_units') }}</small>
                @endif
            </div>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-sm-12">

        <div id="foil_and_core_tech" class="form-group col-sm-3">
            <div class="form-group col-sm-12">
                {!! Form::label('foil_and_core_tech', 'Foil and Core Tech') !!}
                <select name="cb[foil_and_core_tech]" id="foil_and_core_tech" class="form-control chosen-select" data-placeholder="">
                    <option value=""></option>
                    @foreach($staff as $staffmember)
                        <option value="{{ $staffmember->id }}" {{ isset($cb_work) && $cb_work->foil_and_core_tech == $staffmember->id ? 'selected' : '' }}>{{ $staffmember->tech }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group {{ $errors->has('foil_and_core_units') ? ' has-error' : '' }}">
                <label for="foil_and_core_units">Foil And Core Units</label>
                <input name="cb[foil_and_core_units]" id="foil_and_core_units" class="form-control"
                       value="{{ isset($cb_work) ? $cb_work->foil_and_core_units : old('foil_and_core_units') }}">
                @if ($errors->has('foil_and_core_units'))
                    <small class="help-block">{{ $errors->first('foil_and_core_units') }}</small>
                @endif
            </div>
        </div>

        <div class="col-sm-1"></div>

        <div id="cb_other_tech" class="form-group col-sm-3">
            <div class="form-group col-sm-12">
                {!! Form::label('other_tech', 'Other Tech') !!}
                <select name="cb[other_tech]" id="other_tech" class="form-control chosen-select" data-placeholder="">
                    <option value=""></option>
                    @foreach($staff as $staffmember)
                        <option value="{{ $staffmember->id }}" {{ isset($cb_work) && $cb_work->other_tech == $staffmember->id ? 'selected' : '' }}>{{ $staffmember->tech }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group {{ $errors->has('cb_other_units') ? ' has-error' : '' }}">
                <label for="other_units">Other Units</label>
                <input name="cb[other_units]" id="other_units" class="form-control"
                       value="{{ isset($cb_work) ? $cb_work->other_units : old('other_units') }}">
                @if ($errors->has('cb_other_units'))
                    <small class="help-block">{{ $errors->first('other_units') }}</small>
                @endif
            </div>
        </div>
    </div>
</div>