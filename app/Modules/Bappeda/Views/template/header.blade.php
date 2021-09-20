<nav
    class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header bg-default">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                        href="#"><i class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="javascript:void(0)">
                        <img class="brand-logo" alt="Logo Kabupaten Magelang"
                            src="{{ base_url('assets/img/logo/logo_kab_sm.png') }}">
                        <h3 class="brand-text">{{ strtoupper(session('role')) }}</h3>
                    </a>
                </li>
                <li class="nav-item d-none d-md-block float-right"><a class="nav-link modern-nav-toggle pr-0"
                        data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white"
                            data-ticon="ft-toggle-right"></i></a></li>
                <li class="nav-item d-md-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i
                            class="la la-ellipsis-v"></i></a>
                </li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left"> </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="javascript:void(0)"
                            data-toggle="dropdown">
                            <span class="mr-1">Hello,
                                <span class="user-name text-bold-700 d-inline-flex">{{ session('nama_user') }}</span>
                            </span>
                            <span class="avatar avatar-online">
                                <img src="https://ui-avatars.com/api/?name={{ session('nama_user') }}&background=random&color=fff&size=100&rounded=true&bold=true&format=svg&font-size=0.45"
                                    alt="avatar"><i></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            {{-- <a class="dropdown-item" href="#"><i class="ft-user"></i> Ubah Profil</a> --}}
                            <a class="dropdown-item" href="{{ base_url('bappeda/akun') }}"><i
                                    class="ft-lock"></i> Akun Login</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ base_url('auth/logout') }}"><i
                                    class="ft-power"></i>
                                Logout</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</nav>
