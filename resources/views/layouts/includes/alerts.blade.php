@if(session('success'))
    <div class="alert alert-success alert-dismissable m-b-20">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissable m-b-20">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{ session('error') }}
    </div>
@endif

<div class="alert alert-danger alert-dismissable m-b-20 {{ $errors->count() == 0 ? 'hidden' : '' }}" id="errors-alert">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    Please fix the errors below.
</div>

<div class="alert alert-danger alert-dismissable m-b-20 hidden" id="custom-error-alert">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <span></span>
</div>