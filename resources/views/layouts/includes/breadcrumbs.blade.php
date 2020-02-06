<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">{{ isset($pageTitleOverwrite) ? $pageTitleOverwrite : $pageTitle }}</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        @yield('buttons')
        <ol class="breadcrumb">
            @yield('breadcrumbs')
        </ol>
    </div>
</div>