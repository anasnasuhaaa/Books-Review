<aside class="main-sidebar sidebar-dark-primary  elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('template/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Books Review</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('template/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                @auth
                    <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                @endauth
                @guest
                    <a href="#" class="d-block">Belum Login</a>
                @endguest
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
     with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Pages
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Tables
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/genre" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Genre</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/penulis" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Penulis</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin/buku" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Buku</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @guest
                    <li class="nav-item bg-info">
                        <a href="/login" class="nav-link d-flex align-items-center ">
                            <i class="fa fa-arrow-right mx-1" style="font-size: 1.5em" aria-hidden="true"></i>
                            <p class="mx-1">
                                LogIn
                            </p>
                        </a>
                    </li>
                @endguest
                @auth
                    <li class="nav-item">
                        <a href="/profile" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Profile
                            </p>
                        </a>
                    </li>
                    <li class="nav-item bg-danger">
                        <a class="nav-link d-flex align-items-center " href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                            <i class="fa fa-arrow-left mx-1" style="font-size: 1.5em" aria-hidden="true"></i>
                            <p class="mx-1">
                                LogOut
                            </p>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>

                @endauth
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
