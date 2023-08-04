
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- Sidebar header -->
        <div class="sidebar-section">
            <div class="sidebar-section-body d-flex justify-content-center">
                <h5 class="sidebar-resize-hide flex-grow-1 my-auto">Menú</h5>

                <div>
                    <button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                        <i class="ph-arrows-left-right"></i>
                    </button>

                    <button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
                        <i class="ph-x"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- /sidebar header -->


        <!-- Main navigation -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header pt-0">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Principal</div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ Route::is('home')?'active':'' }}">
                        <i class="ph-house"></i><span>Inicio</span>
                    </a>
                </li>
                @role('ADMINISTRADOR')
                <li class="nav-item">
                    <a href="{{ route('usuarios.index') }}" class="nav-link {{ Route::is('usuarios*')?'active':'' }}">
                        <i class="ph-users"></i><span>Docentes</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('docentes.index') }}" class="nav-link {{ Route::is('docentes*')?'active':'' }}">
                        <i class="ph-users"></i><span>Registrar docente</span>
                    </a>
                </li>
                @endrole

                @role('DOCENTE')
                <li class="nav-item">
                    <a href="{{ route('datos-personales.index') }}" class="nav-link {{ Route::is('datos-personales*')?'active':'' }}">
                        <i class="ph-users"></i><span>Datos personales</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('titulos.index') }}" class="nav-link {{ Route::is('titulos*')?'active':'' }}">
                        <i class="ph ph-graduation-cap"></i><span>Títulos</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('certificados.index') }}" class="nav-link {{ Route::is('certificados*')?'active':'' }}">
                        <i class="ph ph-identification-card"></i><span>Certificados</span>
                    </a>
                </li>
                @endrole


            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
