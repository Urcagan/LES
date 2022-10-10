<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{route('admin.user.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Пользователи</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.complex.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-globe"></i>
                    <p>Комплексы</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.plant.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-globe"></i>
                    <p>Установки</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.unit.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-globe"></i>
                    <p>Агрегаты</p>
                </a>
            </li>
        </ul>

    </div>
    <!-- /.sidebar -->
</aside>


