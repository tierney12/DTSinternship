<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">
        <div class="top-left-part">
            <!-- Logo -->
            <a class="logo" href="{{ url('/') }}">
                <img src="{{ asset('/images/logo-tablet-main.png') }}" alt="home" class="light-logo"/>
            </a>
        </div>
        <ul class="nav navbar-top-links navbar-left">
            <li>
                <a href="#" class="open-close waves-effect waves-light visible-xs"><i class="ti-close ti-menu"></i></a>
            </li>
        </ul>
        <!-- /Logo -->
        <ul class="nav navbar-top-links navbar-right pull-right">
            @if($_SUBDOMAIN == 'admin')
                <li>
                    <a href="/mailbox">
                        <i class="mdi mdi-email"></i>
                        <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                    </a>
                </li>
                <li>
                    <a href="/faq"> <i class="mdi mdi-help-circle"></i></a>
                </li>
                <li class="in">
                    <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                        <input type="text" placeholder="Search..." class="form-control" id="search-input">
                    </form>
                </li>
            @endif
            <li class="dropdown">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="javascript:void(0)">
                    @include('layouts.includes.avatar', [
                        'size' => 36,
                        'name' => Auth::user()->name,
                        'user' => Auth::user(),
                        'classes' => 'img-circle'])
                    <b class="hidden-xs">{{ Auth::user()->name }}</b><span class="caret"></span>
                </a>
                <ul class="dropdown-menu dropdown-user animated flipInY">
                    <li>
                        <div class="dw-user-box">
                            <div class="u-img">
                                @include('layouts.includes.avatar', [
                                    'size' => 80,
                                    'name' => Auth::user()->name,
                                    'user' => Auth::user()
                                ])
                            </div>
                            <div class="u-text">
                                <h4>{{ Auth::user()->name }}</h4>
                                <p class="text-muted">{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li><a href="/settings">Settings</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="/reset-password">Change password</a></li>
                    <li role="separator" class="divider"></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}" id="logout-form">
                            {{ csrf_field() }}
                        </form>
                        <a href="javascript:void(0)" onclick="document.getElementById('logout-form').submit()">
                            <i class="fa fa-power-off"></i> Logout
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        @if(session('impersonated_by'))
            <ul class="nav navbar-right navbar-nav" id="return-to-agent">
                <li><a href="{{ route('impersonate.leave', [], false) }}" class="btn btn-danger">Return to admin</a></li>
            </ul>
        @endif
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
</nav>