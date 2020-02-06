@php
    $staff = App\Models\Staff::get();
@endphp

<div class="row">
    <div class="col-sm-12">
        <div id="cast_models_tech" class="form-group col-sm-3">
            <div class="form-group col-sm-12">
                {!! Form::label('cast_models_tech', 'Cast Models Tech') !!}
                <select name="pros[cast_models_tech]" id="cast_models_tech" class="chosen-select" data-placeholder="">
                    <option value=""></option>
                    @foreach($staff as $staffmember)
                        <option value="{{ $staffmember->id }}" {{ isset($pros_work) && $pros_work->cast_models_tech == $staffmember->id ? 'selected' : '' }}>{{ $staffmember->tech }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group {{ $errors->has('cast_models_units') ? ' has-error' : '' }}">
                <label for="cast_models_units">Cast Models Units</label>
                <input name="pros[cast_models_units]" id="cast_models_units" class="form-control"
                       value="{{ isset($pros_work) ? $pros_work->cast_models_units : old('cast_models_units') }}">
                @if ($errors->has('cast_models_units'))
                    <small class="help-block">{{ $errors->first('cast_models_units') }}</small>
                @endif
            </div>
        </div>

        <div id="re_trail_tech" class="form-group col-sm-3">
            <div class="form-group col-sm-12">
                {!! Form::label('re_trail_tech', 'Re-Trail Tech') !!}
                <select name="pros[re_trail_tech]" id="re_trail_tech" class="chosen-select" data-placeholder="">
                    <option value=""></option>
                    @foreach($staff as $staffmember)
                        <option value="{{ $staffmember->id }}" {{ isset($pros_work) && $pros_work->re_trail_tech == $staffmember->id ? 'selected' : '' }}>{{ $staffmember->tech }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group {{ $errors->has('re_trail_units') ? ' has-error' : '' }}">
                <label for="re_trail_units">Re Trail Units</label>
                <input name="pros[re_trail_units]" id="re_trail_units" class="form-control"
                       value="{{ isset($pros_work) ? $pros_work->re_trail_units : old('re_trail_units') }}">
                @if ($errors->has('re_trail_units'))
                    <small class="help-block">{{ $errors->first('re_trail_units') }}</small>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div id="special_tray_tech" class="form-group col-sm-3">
            <div class="form-group col-sm-12">
                {!! Form::label('special_tray_tech', 'Special Tray Tech') !!}
                <select name="pros[special_tray_tech]" id="special_tray_tech" class="chosen-select" data-placeholder="">
                    <option value=""></option>
                    @foreach($staff as $staffmember)
                        <option value="{{ $staffmember->id }}" {{ isset($pros_work) && $pros_work->special_tray_tech == $staffmember->id ? 'selected' : '' }}>{{ $staffmember->tech }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group {{ $errors->has('special_tray_units') ? ' has-error' : '' }}">
                <label for="special_tray_units">Special Tray Units</label>
                <input name="pros[special_tray_units]" id="special_tray_units" class="form-control"
                       value="{{ isset($pros_work) ? $pros_work->special_tray_units : old('special_tray_units') }}">
                @if ($errors->has('special_tray_units'))
                    <small class="help-block">{{ $errors->first('special_tray_units') }}</small>
                @endif
            </div>
        </div>

        <div id="reset_finish_tech" class="form-group col-sm-3">
            <div class="form-group col-sm-12">
                {!! Form::label('reset_finish_tech', 'Reset Finish Tech') !!}
                <select name="pros[reset_finish_tech]" id="reset_finish_tech" class="chosen-select" data-placeholder="">
                    <option value=""></option>
                    @foreach($staff as $staffmember)
                        <option value="{{ $staffmember->id }}" {{ isset($pros_work) && $pros_work->reset_finish_tech == $staffmember->id ? 'selected' : '' }}>{{ $staffmember->tech }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group {{ $errors->has('reset_finish_units') ? ' has-error' : '' }}">
                <label for="reset_finish_units">Reset Finish Units</label>
                <input name="pros[reset_finish_units]" id="reset_finish_units" class="form-control"
                       value="{{ isset($pros_work) ? $pros_work->reset_finish_units : old('reset_finish_units') }}">
                @if ($errors->has('reset_finish_units'))
                    <small class="help-block">{{ $errors->first('reset_finish_units') }}</small>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div id="duplicate_tech" class="form-group col-sm-3">
            <div class="form-group col-sm-12">
                {!! Form::label('duplicate_tech', 'Duplicate Tech') !!}
                <select name="pros[duplicate_tech]" id="duplicate_tech" class="chosen-select" data-placeholder="">
                    <option value=""></option>
                    @foreach($staff as $staffmember)
                        <option value="{{ $staffmember->id }}" {{ isset($pros_work) && $pros_work->duplicate_tech == $staffmember->id ? 'selected' : '' }}>{{ $staffmember->tech }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group {{ $errors->has('duplicate_units') ? ' has-error' : '' }}">
                <label for="duplicate_units">Duplicate Units</label>
                <input name="pros[duplicate_units]" id="duplicate_units" class="form-control"
                       value="{{ isset($pros_work) ? $pros_work->duplicate_units : old('duplicate_units') }}">
                @if ($errors->has('duplicate_units'))
                    <small class="help-block">{{ $errors->first('duplicate_units') }}</small>
                @endif
            </div>
        </div>

        <div id="wax_finish_tech" class="form-group col-sm-3">
            <div class="form-group col-sm-12">
                {!! Form::label('wax_finish_tech', 'Wax Finish Tech') !!}
                <select name="pros[wax_finish_tech]" id="wax_finish_tech" class="chosen-select" data-placeholder="">
                    <option value=""></option>
                    @foreach($staff as $staffmember)
                        <option value="{{ $staffmember->id }}" {{ isset($pros_work) && $pros_work->wax_finish_tech == $staffmember->id ? 'selected' : '' }}>{{ $staffmember->tech }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group {{ $errors->has('wax_finish_units') ? ' has-error' : '' }}">
                <label for="wax_finish_units">Wax Finish Units</label>
                <input name="pros[wax_finish_units]" id="wax_finish_units" class="form-control"
                       value="{{ isset($pros_work) ? $pros_work->wax_finish_units : old('wax_finish_units') }}">
                @if ($errors->has('wax_finish_units'))
                    <small class="help-block">{{ $errors->first('wax_finish_units') }}</small>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div id="record_block_tech" class="form-group col-sm-3">
            <div class="form-group col-sm-12">
                {!! Form::label('record_block_tech', 'Record Block Tech') !!}
                <select name="pros[record_block_tech]" id="record_block_tech" class="chosen-select" data-placeholder="">
                    <option value=""></option>
                    @foreach($staff as $staffmember)
                        <option value="{{ $staffmember->id }}" {{ isset($pros_work) && $pros_work->record_block_tech == $staffmember->id ? 'selected' : '' }}>{{ $staffmember->tech }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group {{ $errors->has('record_block_units') ? ' has-error' : '' }}">
                <label for="record_block_units">Record Block Units</label>
                <input name="pros[record_block_units]" id="record_block_units" class="form-control"
                       value="{{ isset($pros_work) ? $pros_work->record_block_units : old('record_block_units') }}">
                @if ($errors->has('record_block_units'))
                    <small class="help-block">{{ $errors->first('record_block_units') }}</small>
                @endif
            </div>
        </div>

        <div id="flask_tech" class="form-group col-sm-3">
            <div class="form-group col-sm-12">
                {!! Form::label('flask_tech', 'Flask Tech') !!}
                <select name="pros[flask_tech]" id="flask_tech" class="chosen-select" data-placeholder="">
                    <option value=""></option>
                    @foreach($staff as $staffmember)
                        <option value="{{ $staffmember->id }}" {{ isset($pros_work) && $pros_work->flask_tech == $staffmember->id ? 'selected' : '' }}>{{ $staffmember->tech }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group {{ $errors->has('flask_units') ? ' has-error' : '' }}">
                <label for="flask_units">Flask Units</label>
                <input name="pros[flask_units]" id="flask_units" class="form-control"
                       value="{{ isset($pros_work) ? $pros_work->flask_units : old('flask_units') }}">
                @if ($errors->has('flask_units'))
                    <small class="help-block">{{ $errors->first('flask_units') }}</small>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div id="replica_block_tech" class="form-group col-sm-3">
            <div class="form-group col-sm-12">
                {!! Form::label('replica_block_tech', 'Replica Block Tech') !!}
                <select name="pros[replica_block_tech]" id="replica_block_tech" class="chosen-select" data-placeholder="">
                    <option value=""></option>
                    @foreach($staff as $staffmember)
                        <option value="{{ $staffmember->id }}" {{ isset($pros_work) && $pros_work->replica_block_tech == $staffmember->id ? 'selected' : '' }}>{{ $staffmember->tech }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group {{ $errors->has('replica_block_units') ? ' has-error' : '' }}">
                <label for="replica_block_units">Replica Block Units</label>
                <input name="pros[replica_block_units]" id="replica_block_units" class="form-control"
                       value="{{ isset($pros_work) ? $pros_work->replica_block_units : old('replica_block_units') }}">
                @if ($errors->has('replica_block_units'))
                    <small class="help-block">{{ $errors->first('replica_block_units') }}</small>
                @endif
            </div>
        </div>

        <div id="deflask_tech" class="form-group col-sm-3">
            <div class="form-group col-sm-12">
                {!! Form::label('deflask_tech', 'Deflask Tech') !!}
                <select name="pros[deflask_tech]" id="deflask_tech" class="chosen-select" data-placeholder="">
                    <option value=""></option>
                    @foreach($staff as $staffmember)
                        <option value="{{ $staffmember->id }}" {{ isset($pros_work) && $pros_work->deflask_tech == $staffmember->id ? 'selected' : '' }}>{{ $staffmember->tech }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group {{ $errors->has('deflask_units') ? ' has-error' : '' }}">
                <label for="deflask_units">Deflask Units</label>
                <input name="pros[deflask_units]" id="deflask_units" class="form-control"
                       value="{{ isset($pros_work) ? $pros_work->deflask_units : old('deflask_units') }}">
                @if ($errors->has('deflask_units'))
                    <small class="help-block">{{ $errors->first('deflask_units') }}</small>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div id="articulate_tech" class="form-group col-sm-3">
            <div class="form-group col-sm-12">
                {!! Form::label('articulate_tech', 'Articulate Tech') !!}
                <select name="pros[articulate_tech]" id="articulate_tech" class="chosen-select" data-placeholder="">
                    <option value=""></option>
                    @foreach($staff as $staffmember)
                        <option value="{{ $staffmember->id }}" {{ isset($pros_work) && $pros_work->articulate_tech == $staffmember->id ? 'selected' : '' }}>{{ $staffmember->tech }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group {{ $errors->has('articulate_units') ? ' has-error' : '' }}">
                <label for="pros_articulate_units">Articulate Units</label>
                <input name="pros[articulate_units]" id="pros_articulate_units" class="form-control"
                       value="{{ isset($pros_work) ? $pros_work->articulate_units : old('articulate_units') }}">
                @if ($errors->has('articulate_units'))
                    <small class="help-block">{{ $errors->first('articulate_units') }}</small>
                @endif
            </div>
        </div>

        <div id="trim_tech" class="form-group col-sm-3">
            <div class="form-group col-sm-12">
                {!! Form::label('trim_tech', 'Trim Tech') !!}
                <select name="pros[trim_tech]" id="trim_tech" class="chosen-select" data-placeholder="">
                    <option value=""></option>
                    @foreach($staff as $staffmember)
                        <option value="{{ $staffmember->id }}" {{ isset($pros_work) && $pros_work->trim_tech == $staffmember->id ? 'selected' : '' }}>{{ $staffmember->tech }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group {{ $errors->has('trim_units') ? ' has-error' : '' }}">
                <label for="trim_units">Trim Units</label>
                <input name="pros[trim_units]" id="trim_units" class="form-control"
                       value="{{ isset($pros_work) ? $pros_work->trim_units : old('trim_units') }}">
                @if ($errors->has('trim_units'))
                    <small class="help-block">{{ $errors->first('trim_units') }}</small>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div id="design_tech" class="form-group col-sm-3">
            <div class="form-group col-sm-12">
                {!! Form::label('design_tech', 'Design Tech') !!}
                <select name="pros[design_tech]" id="design_tech" class="chosen-select" data-placeholder="">
                    <option value=""></option>
                    @foreach($staff as $staffmember)
                        <option value="{{ $staffmember->id }}" {{ isset($pros_work) && $pros_work->design_tech == $staffmember->id ? 'selected' : '' }}>{{ $staffmember->tech }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group {{ $errors->has('design_units') ? ' has-error' : '' }}">
                <label for="design_units">Design Units</label>
                <input name="pros[design_units]" id="design_units" class="form-control"
                       value="{{ isset($pros_work) ? $pros_work->design_units : old('design_units') }}">
                @if ($errors->has('design_units'))
                    <small class="help-block">{{ $errors->first('design_units') }}</small>
                @endif
            </div>
        </div>

        <div id="polish_tech" class="form-group col-sm-3">
            <div class="form-group col-sm-12">
                {!! Form::label('polish_tech', 'Polish Tech') !!}
                <select name="pros[polish_tech]" id="polish_tech" class="chosen-select" data-placeholder="">
                    <option value=""></option>
                    @foreach($staff as $staffmember)
                        <option value="{{ $staffmember->id }}" {{ isset($pros_work) && $pros_work->polish_tech == $staffmember->id ? 'selected' : '' }}>{{ $staffmember->tech }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group {{ $errors->has('polish_units') ? ' has-error' : '' }}">
                <label for="polish_units">Polish Units</label>
                <input name="pros[polish_units]" id="polish_units" class="form-control"
                       value="{{ isset($pros_work) ? $pros_work->polish_units : old('polish_units') }}">
                @if ($errors->has('polish_units'))
                    <small class="help-block">{{ $errors->first('polish_units') }}</small>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div id="wax_up_tech" class="form-group col-sm-3">
            <div class="form-group col-sm-12">
                {!! Form::label('wax_up_tech', 'Wax-Up Tech') !!}
                <select name="pros[wax_up_tech]" id="wax_up_tech" class="chosen-select" data-placeholder="">
                    <option value=""></option>
                    @foreach($staff as $staffmember)
                        <option value="{{ $staffmember->id }}" {{ isset($pros_work) && $pros_work->wax_up_tech == $staffmember->id ? 'selected' : '' }}>{{ $staffmember->tech }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group {{ $errors->has('wax_up_units') ? ' has-error' : '' }}">
                <label for="wax_up_units">Wax Up Units</label>
                <input name="pros[wax_up_units]" id="wax_up_units" class="form-control"
                       value="{{ isset($pros_work) ? $pros_work->wax_up_units : old('wax_up_units') }}">
                @if ($errors->has('wax_up_units'))
                    <small class="help-block">{{ $errors->first('wax_up_units') }}</small>
                @endif
            </div>
        </div>

        <div id="repair_tech" class="form-group col-sm-3">
            <div class="form-group col-sm-12">
                {!! Form::label('repair_tech', 'Repair Tech') !!}
                <select name="pros[repair_tech]" id="repair_tech" class="chosen-select" data-placeholder="">
                    <option value=""></option>
                    @foreach($staff as $staffmember)
                        <option value="{{ $staffmember->id }}" {{ isset($pros_work) && $pros_work->repair_tech == $staffmember->id ? 'selected' : '' }}>{{ $staffmember->tech }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group {{ $errors->has('repair_units') ? ' has-error' : '' }}">
                <label for="repair_units">Repair Units</label>
                <input name="pros[repair_units]" id="repair_units" class="form-control"
                       value="{{ isset($pros_work) ? $pros_work->repair_units : old('repair_units') }}">
                @if ($errors->has('repair_units'))
                    <small class="help-block">{{ $errors->first('repair_units') }}</small>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div id="trail_tech" class="form-group col-sm-3">
        <div class="form-group col-sm-12">
            {!! Form::label('trial_tech', 'Trail Tech') !!}
            <select name="pros[trial_tech]" id="trial_tech" class="chosen-select" data-placeholder="">
                <option value=""></option>
                @foreach($staff as $staffmember)
                    <option value="{{ $staffmember->id }}" {{ isset($pros_work) && $pros_work->trial_tech == $staffmember->id ? 'selected' : '' }}>{{ $staffmember->tech }}</option>
                @endforeach
            </select>
        </div>
    </div>

        <div class="col-sm-2">
            <div class="form-group {{ $errors->has('trial_units') ? ' has-error' : '' }}">
                <label for="trial_units">Trial Units</label>
                <input name="pros[trial_units]" id="trial_units" class="form-control"
                       value="{{ isset($pros_work) ? $pros_work->trial_units : old('trial_units') }}">
                @if ($errors->has('trial_units'))
                    <small class="help-block">{{ $errors->first('trial_units') }}</small>
                @endif
            </div>
        </div>



        <div id="other_tech" class="form-group col-sm-3">
            <div class="form-group col-sm-12">
                {!! Form::label('other_tech', 'Other Tech') !!}
                <select name="pros[other_tech]" id="other_tech" class="chosen-select" data-placeholder="">
                    <option value=""></option>
                    @foreach($staff as $staffmember)
                        <option value="{{ $staffmember->id }}" {{ isset($pros_work) && $pros_work->other_tech == $staffmember->id ? 'selected' : '' }}>{{ $staffmember->tech }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group {{ $errors->has('other_units') ? ' has-error' : '' }}">
                <label for="pros_other_units">Other Units</label>
                <input name="pros[other_units]" id="other_units" class="form-control"
                       value="{{ isset($pros_work) ? $pros_work->other_units : old('other_units') }}">
                @if ($errors->has('other_units'))
                    <small class="help-block">{{ $errors->first('other_units') }}</small>
                @endif
            </div>
        </div>
    </div>
</div>
