<form method="POST" action="{{ route('statements.store') }}">
    {{ csrf_field() }}
    <div class="panel">
        <div class="panel-body">
            @include('admin.statements.fields')
        </div>
    </div>

    <!-- Submit Field -->
    <div class="row">
        <div class="col-sm-12 form-group text-right">
            <input type="submit" class="btn btn-success" value="Save">
        </div>
    </div>
</form>