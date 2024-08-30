<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: rgb(58, 81, 88)">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-collection-fill" viewBox="0 0 16 16">
            <path
                d="M0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6zM2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3m2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1" />
        </svg>
        <span class="brand-text font-weight-light">PORTOFOLIO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('LY.jpeg') }}" class="img-circle elevation-2" alt="">
            </div>
            <div class="info">
                <a href="#" class="d-block">Hi Leaa</a>
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
                    <a href="{{ url('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Home Page
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Master Data
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('profile.index') }}" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('education.index') }}" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Education</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('experiences.index') }}" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Experiences</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('skills.index') }}" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Skills</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            Portofolio
                        </p>
                    </a>
                </li>

            </ul>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
