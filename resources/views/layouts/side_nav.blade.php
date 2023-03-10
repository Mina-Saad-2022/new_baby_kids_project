

<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center"  >
    <img class="animation__shake" src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
</div>

<!-- Main Sidebar Container -->
<aside   class="main-sidebar sidebar-dark-primary elevation-4" >
<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Mina saad</a>
        </div>
    </div>





<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    {{ __('dashboard.choose')}}
{{--                    <i class="right fas fa-angle-left"></i>--}}
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('dashboard.view_home_page')}}" class="nav-link active">
                        <i class="fal fa-home-lg-alt"></i>
                        <p>{{ __('dashboard.home page')}}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('dashboard.view_admin_page')}}" class="nav-link active">
                        <i class="far fa-user-shield"></i>
                        <p>{{ __('dashboard.all_admin')}}</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{route('dashboard.view_create_page')}}" class="nav-link active">
                        <i class="far fa-user-plus"></i>
                        <p>{{ __('dashboard.create')}}</p>

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
