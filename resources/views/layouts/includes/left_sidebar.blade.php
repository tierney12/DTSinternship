<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav">
        <div class="sidebar-head">
            <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span>
                <span class="hide-menu">Navigation</span>
            </h3>
        </div>
        <ul class="nav" id="side-menu">
            <li>
                <a href="{{ url('/') }}" class="waves-effect {{ $pageTitle == 'Home' ? 'active' : '' }}">
                    <i class="mdi mdi-home fa-fw"></i> <span class="hide-menu">Home</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/dentists') }}"
                   class="waves-effect {{ $pageTitle == 'Dentists' ? 'active' : '' }}">
                    <i class="mdi mdi-account-multiple fa-fw"></i> <span class="hide-menu">Dentists</span>
                </a>
            </li>
        </ul>
    </div>
</div>