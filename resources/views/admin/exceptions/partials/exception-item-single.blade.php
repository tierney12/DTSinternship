<div class="form-group col-sm-2">
    <div class="form-group">
        {!! Form::button('Add', ['class' => 'btn btn-primary add-product']) !!}
    </div>
</div>

<div class="form-group col-sm-2">
    <div class="form-group">
        {!! Form::button('Remove Row', ['class' => 'btn btn-primary remove-product']) !!}
    </div>
</div>

<table class="table stock_items" id="stock_table">
    <tbody class="stock-items">
    @if(isset($priceband))
        @foreach($priceband->stockPricebands as $row)
            @include('admin.exceptions.partials.exception-row', ['position' => $position])
            @php($position ++)
        @endforeach
    @else
        @include('admin.exceptions.partials.exception-row', ['position' => 0])
    @endif
    </tbody>
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script type="text/javascript">


    $(document).ready(function(){
        $(document).on('change', '.stock_code', function(){
            console.log("user has updated stock_code");

            var des_id=$(this).val();

            var position = $(this).closest('.exception-wrapper').data('position');

            console.log(position);
            //console.log(position);
            //console.log(des_id);

            $.ajax({
                type:'get',
                url:'{!! URL::to('/findStockDetails') !!}',
                data:{'id':des_id},
                success:function(data){

                    result = data;

                    console.log(result);

                    $('#stock_description' + position).val(result[0]['id']);
                    $('#stock_price' + position).val(result[0]['sales_price']);

                    $('#stock_description' + position).trigger('chosen:updated');
                    $('#stock_price' + position).trigger('chosen:updated');
                }
            });
        })
    });

    $(document).ready(function(){
        $('.stock_code').trigger('change');
        $('.remove-product').hide();
    });

    $(document).ready(function(){
        $(document).on('change', '.stock_description', function(){


            var des_id=$(this).val();
            var position = $(this).closest('.exception-wrapper').data('position');


            // console.log(des_id);

            $.ajax({
                type:'get',
                url:'{!! URL::to('/findStockDetails') !!}',
                data:{'id':des_id},
                success:function(data){

                    result = data;
                    // console.log(result[0]["stock_code"]);
                    // console.log(result[0]["id"]);

                    $('#stock_id' + position).val(result[0]['id']);

                    $('#stock_price' + position).val(result[0]['sales_price']);
                    if($('#stock_units' + position).val() != null){
                        $('#subtotal' + position).val((parseFloat(result[0]['sales_price']) * parseInt($('#stock_units' + position).val())).toFixed(2));
                    }

                    $('#stock_id' + position).trigger('chosen:updated');
                    $('#stock_price' + position).trigger('chosen:updated');
                    $('#subtotal' + position).trigger('chosen:updated');

                }
            });
        })
    });
    

    $(document).ready(function(){
        $(document).on('click', '.add-product', function(){

            console.log($('.exception-wrapper:last'));

            var position = parseInt($('.exception-wrapper:last').data('position')) + 1;

            $.ajax({
                url: '{!! URL::to('/addExceptionStockRow') !!}',
                data: {'position':position}
            }).done(function(response){
                $('.stock-items').append(response);
            });

            $('#stock_id' + position).trigger('chosen:updated');
            $('#stock_description' + position).trigger('chosen:updated');

            $('.remove-product').show();
        });
    });

    $(document).ready(function(){
        $(document).on('click', '.remove-product', function(){

            var position = parseInt($('.exception-wrapper:last').data('position'));
            if(position > 0)
            {
                $('.exception-wrapper:last').remove();
            }

            var position = parseInt($('.exception-wrapper:last').data('position'));
            if(position <= 0)
            {
                $('.remove-product').hide();
            }

        });
    });

</script>