<div class="col-sm-6">
    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name">Name</label>
        <input name="name" id="name" class="form-control"
               value="{{ isset($checklist) ? $checklist->name : old('name') }}">
        @if ($errors->has('name'))
            <small class="help-block">{{ $errors->first('name') }}</small>
        @endif
    </div>
</div>

<!-- Item1 Field -->
<div class="col-sm-12 col-lg-12">
    <div class="form-group">
        <label for="item1">Item1</label>
        <textarea name="item1" id="item1" class="form-control"
        >{!! isset($checklist) ? $checklist->item1 : old('item1') !!}</textarea>
    </div>
</div>

<!-- Item2 Field -->
<div class="col-sm-12 col-lg-12">
    <div class="form-group">
        <label for="item2">Item2</label>
        <textarea name="item2" id="item2" class="form-control"
        >{!! isset($checklist) ? $checklist->item2 : old('item2') !!}</textarea>
    </div>
</div>

<!-- Item3 Field -->
<div class="col-sm-12 col-lg-12">
    <div class="form-group">
        <label for="item3">Item3</label>
        <textarea name="item3" id="item3" class="form-control"
        >{!! isset($checklist) ? $checklist->item3 : old('item3') !!}</textarea>
    </div>
</div>

<!-- Item4 Field -->
<div class="col-sm-12 col-lg-12">
    <div class="form-group">
        <label for="item4">Item4</label>
        <textarea name="item4" id="item4" class="form-control"
        >{!! isset($checklist) ? $checklist->item4 : old('item4') !!}</textarea>
    </div>
</div>

<!-- Item5 Field -->
<div class="col-sm-12 col-lg-12">
    <div class="form-group">
        <label for="item5">Item5</label>
        <textarea name="item5" id="item5" class="form-control"
        >{!! isset($checklist) ? $checklist->item5 : old('item5') !!}</textarea>
    </div>
</div>

<!-- Item6 Field -->
<div class="col-sm-12 col-lg-12">
    <div class="form-group">
        <label for="item6">Item6</label>
        <textarea name="item6" id="item6" class="form-control"
        >{!! isset($checklist) ? $checklist->item6 : old('item6') !!}</textarea>
    </div>
</div>

<!-- Item7 Field -->
<div class="col-sm-12 col-lg-12">
    <div class="form-group">
        <label for="item7">Item7</label>
        <textarea name="item7" id="item7" class="form-control"
        >{!! isset($checklist) ? $checklist->item7 : old('item7') !!}</textarea>
    </div>
</div>

<!-- Item8 Field -->
<div class="col-sm-12 col-lg-12">
    <div class="form-group">
        <label for="item8">Item8</label>
        <textarea name="item8" id="item8" class="form-control"
        >{!! isset($checklist) ? $checklist->item8 : old('item8') !!}</textarea>
    </div>
</div>

<!-- Item9 Field -->
<div class="col-sm-12 col-lg-12">
    <div class="form-group">
        <label for="item9">Item9</label>
        <textarea name="item9" id="item9" class="form-control"
        >{!! isset($checklist) ? $checklist->item9 : old('item9') !!}</textarea>
    </div>
</div>

<!-- Item10 Field -->
<div class="col-sm-12 col-lg-12">
    <div class="form-group">
        <label for="item10">Item10</label>
        <textarea name="item10" id="item10" class="form-control"
        >{!! isset($checklist) ? $checklist->item10 : old('item10') !!}</textarea>
    </div>
</div>

<!-- Item11 Field -->
<div class="col-sm-12 col-lg-12">
    <div class="form-group">
        <label for="item11">Item11</label>
        <textarea name="item11" id="item11" class="form-control"
        >{!! isset($checklist) ? $checklist->item11 : old('item11') !!}</textarea>
    </div>
</div>

<!-- Item12 Field -->
<div class="col-sm-12 col-lg-12">
    <div class="form-group">
        <label for="item12">Item12</label>
        <textarea name="item12" id="item12" class="form-control"
        >{!! isset($checklist) ? $checklist->item12 : old('item12') !!}</textarea>
    </div>
</div>

<!-- Item13 Field -->
<div class="col-sm-12 col-lg-12">
    <div class="form-group">
        <label for="item13">Item13</label>
        <textarea name="item13" id="item13" class="form-control"
        >{!! isset($checklist) ? $checklist->item13 : old('item13') !!}</textarea>
    </div>
</div>

<!-- Item14 Field -->
<div class="col-sm-12 col-lg-12">
    <div class="form-group">
        <label for="item14">Item14</label>
        <textarea name="item14" id="item14" class="form-control"
        >{!! isset($checklist) ? $checklist->item14 : old('item14') !!}</textarea>
    </div>
</div>

<!-- Item15 Field -->
<div class="col-sm-12 col-lg-12">
    <div class="form-group">
        <label for="item15">Item15</label>
        <textarea name="item15" id="item15" class="form-control"
        >{!! isset($checklist) ? $checklist->item15 : old('item15') !!}</textarea>
    </div>
</div>

<!-- Item16 Field -->
<div class="col-sm-12 col-lg-12">
    <div class="form-group">
        <label for="item16">Item16</label>
        <textarea name="item16" id="item16" class="form-control"
        >{!! isset($checklist) ? $checklist->item16 : old('item16') !!}</textarea>
    </div>
</div>

<!-- Item17 Field -->
<div class="col-sm-12 col-lg-12">
    <div class="form-group">
        <label for="item17">Item17</label>
        <textarea name="item17" id="item17" class="form-control"
        >{!! isset($checklist) ? $checklist->item17 : old('item17') !!}</textarea>
    </div>
</div>

<!-- Item18 Field -->
<div class="col-sm-12 col-lg-12">
    <div class="form-group">
        <label for="item18">Item18</label>
        <textarea name="item18" id="item18" class="form-control"
        >{!! isset($checklist) ? $checklist->item18 : old('item18') !!}</textarea>
    </div>
</div>

<!-- Item19 Field -->
<div class="col-sm-12 col-lg-12">
    <div class="form-group">
        <label for="item19">Item19</label>
        <textarea name="item19" id="item19" class="form-control"
        >{!! isset($checklist) ? $checklist->item19 : old('item19') !!}</textarea>
    </div>
</div>

<!-- Item20 Field -->
<div class="col-sm-12 col-lg-12">
    <div class="form-group">
        <label for="item20">Item20</label>
        <textarea name="item20" id="item20" class="form-control"
        >{!! isset($checklist) ? $checklist->item20 : old('item20') !!}</textarea>
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('created_by') ? ' has-error' : '' }}">
        <label for="created_by">Created By</label>
        <input name="created_by" id="created_by" class="form-control"
               value="{{ isset($checklist) ? $checklist->created_by : old('created_by') }}">
        @if ($errors->has('created_by'))
            <small class="help-block">{{ $errors->first('created_by') }}</small>
        @endif
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('updated_by') ? ' has-error' : '' }}">
        <label for="updated_by">Updated By</label>
        <input name="updated_by" id="updated_by" class="form-control"
               value="{{ isset($checklist) ? $checklist->updated_by : old('updated_by') }}">
        @if ($errors->has('updated_by'))
            <small class="help-block">{{ $errors->first('updated_by') }}</small>
        @endif
    </div>
</div>