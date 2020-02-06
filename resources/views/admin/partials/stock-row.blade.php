<div class="product-wrapper col-sm-12" data-position="{{$position}}">
    <div id="product-add" class="form-group col-sm-2">
        <div class="form-group col-sm-12">
            {!! Form::label('stock_id', 'Stock Code') !!}
            <select name="{{'stock[' . $position . '][stock_id]'}}" id="{{"stock_id" . $position}}" class="stock_code form-control selectable chosen-select" data-placeholder="Select a Stock Code">
                @if(isset($stocks))
                    @foreach($stocks as $stock)
                        <option value="{{ $stock['id'] }}" {{ isset($job) && $stock_items[$position]['stock_id'] == $stock['id'] ? 'selected' : '' }}>{!! $stock['stock_code'] !!}</option>
                    @endforeach
                @endif
            </select>
        </div>
    </div>

    <div class="form-group col-sm-2">
        {!! Form::label('stock_description', 'Stock Description') !!}
        <select name="{{'stock[' . $position . '][stock_description]'}}" id="{{"stock_description" . $position }}" class="stock_description form-control selectable chosen-select" data-placeholder="Search a Stock Description">
            @foreach($stocks as $stock)
                <option value="{{ $stock['id'] }}" {{ isset($job) && $stock_items[$position]['stock_id'] == $stock['id'] ? 'selected' : '' }}>{!!  $stock['stock_description'] !!}</option>
            @endforeach
        </select>

    </div>

    <div class="form-group col-sm-2">
        <div class="form-group">
            <label for="stock_units">Quantity:</label>
            <input type="number" min="1" name="{{'stock[' . $position . '][stock_units]'}}" id="{{"stock_units" . $position}}" class="stock_units form-control" value='{{ isset($job)  ? intval($stock_items[$position]['units']) : '' }}' step="1">
        </div>
    </div>

    <div class="form-group col-sm-2">
        <div class="form-group">
            <label for="stock_price">Stock Price</label>
            <input readonly name="{{'stock[' . $position . '][stock_price]'}}" id="{{"stock_price". $position}}" class="stock_price form-control" value="0.00"}}>
        </div>
    </div>

    <div class="form-group col-sm-2">
        <div class="form-group">
            <label for="subtotal">Subtotal</label>
            <input  readonly name="{{'stock[' . $position . '][subtotal]'}}" id="{{"subtotal" . $position}}" class="stock-subtotal form-control" value="0.00">
        </div>
    </div>

    <div>
        <input type="hidden" id="job_stock" name="{{'stock[' . $position . '][job_stock]'}}" value="[]">
    </div>
</div>


