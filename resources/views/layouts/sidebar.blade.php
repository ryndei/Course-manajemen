<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Home</a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link elevation-4">
            <img src="{{ asset('/dist/img/logo1.png') }}" alt="SkillSync Logo"
                class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">SkillSync</span>
        </a>
        <div class="sidebar">
            <!-- Sidebar user (optional) -->

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <div class="user-panel  mt-3 pb-1 pl-4 mb-2 d-flex ">
                    <i class="fas fa-user text-white mr-2"></i>
                    <div class="info mb-2 pb-2">
                        <a href="#" class="d-block">{{ auth()->user()->name }}</a>
                    </div>
                </div>
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
   with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{ '/home' }}" class="nav-link {{ request()->is('home') ? 'active' : '' }}">
                            <i class="fa-solid fa-house"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/manajemen_course.index') }}"
                            class="nav-link {{ request()->is('admin/manajemen_course.index') ? 'active' : '' }}">
                            <i class="justify-center nav icon fa-solid fa-book-open-reader"></i>
                            <p>
                                Manajemen kelas
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/admin/manajemen_user.index') }}"
                            class="nav-link {{ request()->is('admin/manajemen_user.index') ? 'active' : '' }}">
                            <i class="justify-center nav icon fa-solid fa-book-open-reader"></i>
                            <p>
                                Manajemen user
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/admin/manajemen_course.listDaftar') }}"
                            class="nav-link {{ request()->is('admin/manajemen_course.listDaftar') ? 'active' : '' }}">
                            <i class="justify-center nav icon fa-solid fa-book-open-reader"></i>
                            <p>
                                Manajemen Siswa
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link"
                            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <p>
                                logout
                            </p>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </aside>
