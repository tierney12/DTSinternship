
        <div class="row">
            {{--<!-- ID Number Field -->--}}
          {{--<div class="form-group col-sm-1">--}}
             {{--{!! Form::label('id', 'ID:') !!}--}}
             {{--<p></p>--}}
         {{--</div>--}}

        <!-- Account Number Field -->
            <div class="form-group col-sm-2">
                {!! Form::label('account_number', 'Account Number:') !!}
                <p>{{$dentist->account_number}}</p>
            </div>

            <!-- Customer Since Field -->
            <div class="form-group col-sm-2">
                {!! Form::label('customer_since', 'Since:') !!}
                <p>{{\Carbon\Carbon::parse($dentist->customer_since)->format('d/m/Y') }}</p>
            </div>

            <!-- Area Id Field -->
            <div class="form-group col-sm-2">
                {!! Form::label('area_id', 'Area:') !!}
                <p>{{$dentist->area->Area}}</p>
            </div>

            <!-- Dentist Status Id Field -->
            <div class="form-group col-sm-2">
                {!! Form::label('dentist_status_id', 'Status:') !!}
                @if($dentist->active == 1)
                    <p>Active</p>
                @else
                    <p>Inactive</p>
                @endif
            </div>

            <!-- Gdc Number Field -->
            <div class="form-group col-sm-2">
                {!! Form::label('gdc_number', 'GDC Number:') !!}
                <p>{{$dentist->gdc_number}}</p>
            </div>

            <!-- Mailing List Opt In Field -->
            <div class="form-group col-sm-2">
                {!! Form::label('mailing_list_opt_in', 'Mail:') !!}
                @if($dentist->mailing_list_opt_in == 1)
                    <p>Active</p>
                @else
                    <p>Inactive</p>
                @endif
            </div>
        </div>

        <hr>

        <div class="row">
            <!-- Title-->
            <div class="form-group col-sm-3">
                {!! Form::label('title', 'Title / Initials:') !!}
                <p>{{ $dentist->title . " " . $dentist->firstname }}</p>
            </div>

            <!-- Surname Field -->
            <div class="form-group col-sm-3">
                {!! Form::label('surname', 'Surname:') !!}
                <p>{{ $dentist->surname }}</p>
            </div>

            <!-- Telephone Field -->
            <div class="form-group col-sm-3">
                {!! Form::label('telephone', 'Telephone:') !!}
                <p>{{ $dentist->phone_number }}</p>
            </div>

            <!-- Practice Id Field -->
            <div class="form-group col-sm-3">
                {!! Form::label('practice_id', 'Practice Manager:') !!}
                <p>{{ $dentist->practice->practice_manager }}</p>
            </div>

            <!-- Mailing List Opt In Field -->
        <!-- <div class="form-group col-sm-1 mb-0">
            <label for="mailing_list_opt_in">
                {!! Form::hidden('mailing_list_opt_in', '0') !!}
        {!! Form::checkbox('mailing_list_opt_in', '1', null, ['id' => 'mailing_list_opt_in']) !!}
                M/D
            </label>
        </div> -->
        </div>

        <hr>

        <div class="row">
            <!-- Email Field -->
            <div class="form-group col-sm-4">
                {!! Form::label('email', 'Email:') !!}
                <p>{{ $dentist->email }}</p>
            </div>

            <!-- Priceband Id Field -->
            <div class="form-group col-sm-2">
                {!! Form::label('priceband_id', 'Priceband:') !!}
                <p>{{ $dentist->priceband->name }}</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <!-- Address Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('address', 'Address:') !!}
                <p>
                    {{$dentist->address->address_line_1}}<br>
                    {{$dentist->address->address_line_2}}, <br>
                    {{$dentist->address->country}}
                </p>
            </div>

            <!-- Recall Month Field -->
            <div class="form-group col-sm-3">
                {!! Form::label('recall_month', 'Recall Month:') !!}
                <p>{{ $dentist->recall_month }}</p>
            </div>
        </div>

        <div class="row">
            <!-- Post Code -->
            <div class="form-group col-sm-6">
                {!! Form::label('address', 'Post Code:') !!}
                <p>{{ $dentist->address->post_code }}</p>
            </div>
            <!-- Preferences Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('preferences', 'Comments:') !!}
                <p>{{$dentist->preferences}}</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-sm-12">
                <table id="example2" class="table table-hover">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Jan</th>
                        <th>Feb</th>
                        <th>Mar</th>
                        <th>Apr</th>
                        <th>May</th>
                        <th>Jun</th>
                        <th>Jul</th>
                        <th>Aug</th>
                        <th>Sep</th>
                        <th>Oct</th>
                        <th>Nov</th>
                        <th>Dec</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{now()->year}}</td>
                        <!-- loop months -->
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>{{(now()->year)-1}}</td>
                        <!-- loop months -->
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>{{(now()->year)-2}}
                        <!-- loop months -->
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="pull-right p-l-10">
            <a href="{{ route('dentists.edit', $dentist) }}" class="btn btn-info">Edit</a>
            <button type="button" class="btn btn-danger delete-button" data-url="{{ route('dentists.destroy', $dentist) }}">
                Delete
            </button>
        </div>



