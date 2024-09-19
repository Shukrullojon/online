<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="{{ asset("admin_lte_3.2.0/dist/img/AdminLTELogo.png") }}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">TASH | METRO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ Request::is('admin/home*') ? "active":'' }}">
                        <i class="fa fa-home"></i>
                        <p>Главная</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('category.index') }}" class="nav-link {{ Request::is('admin/category*') ? "active":'' }}">
                        <i class="fa fa-check-square"></i>
                        <p>Категория</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('work.index') }}" class="nav-link {{ Request::is('admin/work*') ? "active":'' }}">
                        <i class="fa fa-sim-card"></i>
                        <p>Работа</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('submit.index') }}" class="nav-link {{ Request::is('admin/submit*') ? "active":'' }}">
                        <i class="fa fa-sim-card"></i>
                        <p>Приложения</p>
                    </a>
                </li>

                <li class="nav-item {{ (Request::is('admin/roles*') or Request::is('admin/permissions*')) ? 'menu-open' : '' }}">
                    <a href="#"
                       class="nav-link {{ (Request::is('admin/roles*') or Request::is('admin/permissions*')) ? 'active' : '' }}">
                        <i class="nav-icon fa fa-cog"></i>
                        <p>
                            Управление
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Пользователями</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('roles.index') }}"
                               class="nav-link {{ Request::is('admin/roles*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Роли</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('permissions.index') }}"
                               class="nav-link {{ Request::is('admin/permissions*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Разрешение</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
