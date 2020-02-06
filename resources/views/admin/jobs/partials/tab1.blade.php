@php
    $job_stocks = App\Models\JobStock::where('job_id', $job->id)->get();
    $dentist = App\Models\Dentist::where('id', $job->dentist_id)->first();
    $total = 0;


@endphp

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">

                @include('admin.jobs.show_fields')


                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive m-t-40" style="clear: both;">
                            <br>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-left">Stock Code</th>
                                        <th class="text-left">Qty</th>
                                        <th class="text-left">Detail</th>
                                        <th class="text-right">Unit Price</th>
                                        <th class="text-right">Total Price</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($job_stocks as $job_stock)
                                        @php

                                        $stock_priceband = \App\Models\StockPriceband::where('id', $job_stock->stock_id)->first();

                                        $total += $job_stock->units * $stock_priceband->price;


                                        @endphp

                                        <tr>
                                            <td class="text-left">{{$stock_priceband->stock->stock_code}}</td>
                                            <td class="text-left">{{$job_stock->units}}</td>
                                            <td class="text-left">{{$stock_priceband->stock->stock_description}}</td>
                                            <td class="text-right">{{$stock_priceband->price}}</td>
                                            <td class="text-right">{{ $job_stock->units * $stock_priceband->price }}
                                        </tr>

                                    @endforeach
                                    <tr>
                                        <td colspan="4" class="text-right">
                                            <strong>Total</strong>
                                        </td>
                                        <td class="text-right"><strong>{{$total}}</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <a href="{{URL::previous()}}" class="btn btn-default">Back</a>
                    </div>

                    <div class="pull-right p-l-10">
                        <a href="{{ route('jobs.edit', $job) }}" class="btn btn-info">Edit</a>
                        <button type="button" class="btn btn-danger delete-button" data-url="{{ route('jobs.destroy', $job) }}">
                            Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->