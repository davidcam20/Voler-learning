<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="/images/voler-logo.png" alt="Voler Logo" class="brand-image">
        <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link ">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Inicio</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('calendario') }}" class="nav-link ">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>Calendario</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pacientes.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Pacientes </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pagos') }}" class="nav-link">
                        <i class="nav-icon fas fa-credit-card"></i>
                        <p>Pagos </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Documentos </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('ubicaciones.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-globe"></i>
                        <p>Ubicaciones </p>
                    </a>
                </li>
                @hasrole('padre')
                <li class="nav-item"><a class="nav-link" href="#">hacer reserva</a></li>
                @endrole
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-times"></i>
                        <p>Cerrar Sessión </p>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
