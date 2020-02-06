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
        @if(isset($job))
            @foreach($job->stocks as $row)
                @include('admin.partials.stock-row', ['position' => $position])
                @php($position ++)
            @endforeach
        @else
            @include('admin.partials.stock-row', ['position' => 0])
        @endif
    </tbody>
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script type="text/javascript">



    // $(document).ready(function(){
    //     $(document).on('click', '.remove-product', function(){
    //
    //         var position = $('#stock-table').length;
    //
    //         console.log(position);
    //
    //         $('#stock-table').deleteRow(position );
    //     });
    // });


    $(document).ready(function(){
        $(document).on('change', '.stock_code', function(){
            // console.log("user has updated stock_description");

            var des_id=$(this).val();

            var position = $(this).closest('.product-wrapper').data('position');


            //console.log(position);
            //console.log(des_id);

            $.ajax({
                type:'get',
                url:'{!! URL::to('/findStockDetails') !!}',
                data:{'id':des_id},
                success:function(data){

                    result = data;
                    // console.log(result[0]["stock_code"]);
                    // console.log(result[0]["id"]);

                    console.log(result);

                    $('#stock_description' + position).val(result['id']);


                    $('#stock_price' + position).val(result['price']);
                    if($('#stock_units' + position).val() != null){
                        $('#subtotal' + position).val((parseFloat(result['price']) * parseInt($('#stock_units' + position).val())).toFixed(2));
                    }

                    $('#stock_description' + position).trigger('chosen:updated');
                    $('#stock_price' + position).trigger('chosen:updated');
                    $('#subtotal' + position).trigger('chosen:updated');

                }
            });
        })
    });

    $(document).ready(function(){
        // $('.stock_code').trigger('change');
        $('.remove-product').hide();
    });

    $(document).ready(function(){
        $(document).on('change', '.stock_description', function(){


            var des_id=$(this).val();
            var position = $(this).closest('.product-wrapper').data('position');

            // console.log(des_id);

            $.ajax({
                type:'get',
                url:'{!! URL::to('/findStockDetails') !!}',
                data:{'id':des_id},
                success:function(data){

                    result = data;
                    console.log(data);
                    // console.log(result[0]["stock_code"]);
                    // console.log(result[0]["id"]);

                    $('#stock_id' + position).val(result['id']);

                    $('#stock_price' + position).val(result['price']);
                    if($('#stock_units' + position).val() != null){
                        $('#subtotal' + position).val((parseFloat(result['price']) * parseInt($('#stock_units' + position).val())).toFixed(2));
                    }

                    $('#stock_id' + position).trigger('chosen:updated');
                    $('#stock_price' + position).trigger('chosen:updated');
                    $('#subtotal' + position).trigger('chosen:updated');

                }
            });
        })
    });

    $(document).ready(function(){
        $(document).on('change', '.stock_units', function(){

            $('.stock_code').trigger('change');

            // var position = $(this).closest('.product-wrapper').data('position');
            //
            // if($('#stock_id' + position).val() != "" && $('#stock_description' + position).val() != "" ){
            //     $('#subtotal' + position).val(($('#stock_units' + position).val() * $('#stock_price' + position).val()).toFixed(2))
            // }
        });
    });

    $(document).ready(function(){
        $(document).on('click', '.add-product', function(){

            console.log($('.product-wrapper:last'));

            var position = parseInt($('.product-wrapper:last').data('position')) + 1;

            console.log(position);

            $.ajax({
                url: '{!! URL::to('/addStockRow') !!}',
                data: {'position':position}
            }).done(function(response){

                console.log(response);
                $('.stock-items').append(response);
                $('#dentist_id').trigger('change');
            });

            // $('#stock_id' + position).trigger('chosen:updated');
            // $('#stock_description' + position).trigger('chosen:updated');

            // $('#dentist_id').trigger('change');

            $('.remove-product').show();

        });
    });

    $(document).ready(function(){
        $(document).on('click', '.remove-product', function(){

            var position = parseInt($('.product-wrapper:last').data('position'));

            console.log(position);

            if(position > 0)
            {
                $('.product-wrapper:last').remove();
            }

            var position = parseInt($('.exception-wrapper:last').data('position'));
            if(position <= 0)
            {
                $('.product-wrapper').hide();
            }

        });
    });

</script>