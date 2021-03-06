<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav">
        <div class="sidebar-head">
            <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
        <ul class="nav" id="side-menu">
            <li class="user-pro">
                {{--<a href="javascript:void(0)" class="waves-effect"><img src="{{ $exampleUser['avatar'] }}" alt="user-img" class="img-circle"> <span class="hide-menu"> {{ $exampleUser['firstname'] }} {{ $exampleUser['surname'] }} <span class="fa arrow"></span></span>--}}
                {{--</a>--}}
                <ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 0px;">
                    @include('layouts.admin.dropdown-list')
                </ul>
            </li>
            @if(Request::is('/'))
            <li> <a href="/" class="waves-effect active"><i class="mdi mdi-home fa-fw" data-icon="v"></i> <span class="hide-menu"> Home </span></a>
            </li>
            @else
                <li> <a href="/" class="waves-effect"><i class="mdi mdi-home fa-fw" data-icon="v"></i> <span class="hide-menu"> Home </span></a>
                </li>
            @endif

            @if(Request::is('dentists*'))
                <li> <a href="/dentists" class="waves-effect active "><i class="mdi mdi-content-copy fa-fw"></i> <span class="hide-menu">Dentists</span></a>
                </li>
            @else
                <li> <a href="/dentists" class="waves-effect "><i class="mdi mdi-content-copy fa-fw"></i> <span class="hide-menu">Dentists</span></a>
                </li>
            @endif

            @if(Request::is('jobs*'))
                <li> <a href="/jobs" class="waves-effect active"><i class="mdi mdi-format-color-fill fa-fw"></i> <span class="hide-menu">Jobs</span></a>
                </li>
            @else
                <li> <a href="/jobs" class="waves-effect"><i class="mdi mdi-format-color-fill fa-fw"></i> <span class="hide-menu">Jobs</span></a>
                </li>
            @endif

            @if(Request::is('production*'))
                <li> <a href="/production" class="waves-effect active"><i class="mdi mdi-clipboard-text fa-fw"></i> <span class="hide-menu">Production</span></a>
                </li>
            @else
                <li> <a href="/production" class="waves-effect"><i class="mdi mdi-clipboard-text fa-fw"></i> <span class="hide-menu">Production</span></a>
                </li>
            @endif

            @if(Request::is('invoices*'))
                <li> <a href="/invoices" class="waves-effect active"><i class="mdi mdi-table fa-fw"></i> <span class="hide-menu">Invoicing</span></a>
                </li>
            @else
                <li> <a href="/invoices" class="waves-effect"><i class="mdi mdi-table fa-fw"></i> <span class="hide-menu">Invoicing</span></a>
                </li>
            @endif

            @if(Request::is('service-reports*'))
                <li class="last-nav"><a href="/reports" class="waves-effect active"><i class="mdi mdi-apps fa-fw"></i> <span class="hide-menu">Reports</span></a>
                </li>
            @else
                <li class="last-nav"><a href="/reports" class="waves-effect"><i class="mdi mdi-apps fa-fw"></i> <span class="hide-menu">Reports</span></a>
                </li>
            @endif



        </ul>
    </div>
</div>
