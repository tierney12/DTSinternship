<form method="POST" action="{{ route('dentist-mailing-lists.store') }}">
    {{ csrf_field() }}
    <div class="panel">
        <div class="panel-body">
            @include('admin.dentist_mailing_list.fields')
        </div>
    </div>

    <!-- Submit Field -->
    <div class="row">
        <div class="col-sm-12 form-group text-right">
            <input type="submit" class="btn btn-success" value="Save">
        </div>
    </div>
</form>