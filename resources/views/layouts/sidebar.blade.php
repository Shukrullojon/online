<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="{{ asset("admin_lte_3.2.0/dist/img/AdminLTELogo.png") }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">ONLINE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @can('home-index')
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link {{ Request::is('home*') ? "active":'' }}">
                            <i class="fa fa-home"></i>
                            <p>Главная</p>
                        </a>
                    </li>
                @endcan

                @can('cource-index')
                    <li class="nav-item">
                        <a href="{{ route('cource.index') }}" class="nav-link {{ Request::is('cource*') ? "active":'' }}">
                            <i class="fa fa-shapes"></i>
                            <p>Cource</p>
                        </a>
                    </li>
                @endcan

                @can('lesson-index')
                    <li class="nav-item">
                        <a href="{{ route('lesson.index') }}" class="nav-link {{ Request::is('lesson*') ? "active":'' }}">
                            <i class="fa fa-chalkboard"></i>
                            <p>Lesson</p>
                        </a>
                    </li>
                @endcan

                @canany(['role-index','user-index'])
                    <li class="nav-item {{ (Request::is('roles*') or Request::is('permissions*') or Request::is('user*')) ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ (Request::is('roles*') or Request::is('permissions*') or Request::is('user*')) ? 'active' : '' }}">
                            <i class="nav-icon fa fa-cog"></i>
                            <p>
                                Управление
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('user-index')
                                <li class="nav-item">
                                    <a href="{{ route('user.index') }}" class="nav-link {{ Request::is('user*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Пользователями</p>
                                    </a>
                                </li>
                            @endcan

                            @can('role-index')
                                <li class="nav-item">
                                    <a href="{{ route('roles.index') }}" class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Роли</p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcanany
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
