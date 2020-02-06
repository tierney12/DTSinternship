<!-- Transaction Field -->
<div class="form-group col-sm-6">
    {!! Form::label('transaction_id', 'Transaction') !!}
    <select name="transaction_id" id="transaction_id" class="form-control chosen-select" data-placeholder="Select a Transaction">
     	<option></option>
        <option class="fly-add-option">Add a Transaction</option>
     	@foreach($transactions as $id => $name)
     		<option value="{{ $id }}" {{ isset($payment) && $payment->transaction_id == $id ? 'selected' : '' }}>{{ $name }}</option>
     	@endforeach
    </select>
    <input
        data-role="fly-add"
        data-target="#transaction_id"
        data-source="{{ route('transactions.create') }}"
        data-on-success="addNewOption"
        type="button"
        class="btn btn-success btn-xs fly-add hidden"
        value="Add New">
</div>

<!-- Practice Field -->
<div class="form-group col-sm-6">
    {!! Form::label('practice_id', 'Practice') !!}
    <select name="practice_id" id="practice_id" class="form-control chosen-select" data-placeholder="Select a Practice">
     	<option></option>
        <option class="fly-add-option">Add a Practice</option>
     	@foreach($practices as $id => $name)
     		<option value="{{ $id }}" {{ isset($payment) && $payment->practice_id == $id ? 'selected' : '' }}>{{ $name }}</option>
     	@endforeach
    </select>
    <input
        data-role="fly-add"
        data-target="#practice_id"
        data-source="{{ route('practices.create') }}"
        data-on-success="addNewOption"
        type="button"
        class="btn btn-success btn-xs fly-add hidden"
        value="Add New">
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('amount') ? ' has-error' : '' }}">
        <label for="amount">Amount</label>
        <input name="amount" id="amount" class="form-control"
               value="{{ isset($payment) ? $payment->amount : old('amount') }}">
        @if ($errors->has('amount'))
            <small class="help-block">{{ $errors->first('amount') }}</small>
        @endif
    </div>
</div>

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('created_by') ? ' has-error' : '' }}">--}}
        {{--<label for="created_by">Created By</label>--}}
        {{--<input name="created_by" id="created_by" class="form-control"--}}
               {{--value="{{ isset($payment) ? $payment->created_by : old('created_by') }}">--}}
        {{--@if ($errors->has('created_by'))--}}
            {{--<small class="help-block">{{ $errors->first('created_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="col-sm-6">--}}
    {{--<div class="form-group {{ $errors->has('updated_by') ? ' has-error' : '' }}">--}}
        {{--<label for="updated_by">Updated By</label>--}}
        {{--<input name="updated_by" id="updated_by" class="form-control"--}}
               {{--value="{{ isset($payment) ? $payment->updated_by : old('updated_by') }}">--}}
        {{--@if ($errors->has('updated_by'))--}}
            {{--<small class="help-block">{{ $errors->first('updated_by') }}</small>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}