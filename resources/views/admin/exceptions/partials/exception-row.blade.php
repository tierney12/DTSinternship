<div class="exception-wrapper col-sm-12" data-position="{{$position}}">
    <div id="exception-add" class="form-group col-sm-2">
        <div class="form-group col-sm-12">
            {!! Form::label('stock_id', 'Stock Code') !!}
            <select name="{{'stock[' . $position . '][stock_id]'}}" id="{{"stock_id" . $position}}" class="stock_code form-control chosen-select" data-placeholder="Select a Stock Code">
                @foreach($stocks as $stock)
                    <option value="{{ $stock->id }}" {{ isset($job) && $stock_items[$position]['stock_id'] == $stock->id ? 'selected' : '' }}>{!! $stock->stock_code !!}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group col-sm-2">
        {!! Form::label('stock_description', 'Stock Description') !!}
        <select name="{{'stock[' . $position . '][stock_description]'}}" id="{{"stock_description" . $position }}" class="stock_description form-control chosen-select" data-placeholder="Search a Stock Description">
            @foreach($stocks as $stock)
                <option value="{{ $stock->id }}" {{ isset($job) && $stock_items[$position]['stock_id'] == $stock->id ? 'selected' : '' }}>{!!  $stock->description !!}</option>
            @endforeach
        </select>

    </div>

    <div class="form-group col-sm-2">
        <div class="form-group">
            <label for="stock_price">Stock Price</label>
            <input name="{{'stock[' . $position . '][stock_price]'}}" id="{{"stock_price". $position}}" class="stock_price form-control"}}>
        </div>
    </div>

</div>