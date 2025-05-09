<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <i class="fas fa-balance-scale me-2"></i>JuezMX
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">
                        <i class="fas fa-home me-1"></i>Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('explorar*') ? 'active' : '' }}" href="/explorar">
                        <i class="fas fa-search me-1"></i>Explorar Jueces
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('opinion*') ? 'active' : '' }}" href="/opinion">
                        <i class="fas fa-comment-dots me-1"></i>Dar Opinión
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contacto*') ? 'active' : '' }}" href="/contacto">
                        <i class="fas fa-envelope me-1"></i>Contacto
                    </a>
                </li>
            </ul>
            
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user-circle me-1"></i>{{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            @can('manage users')
                                <li><a class="dropdown-item" href="/admin"><i class="fas fa-tools me-2"></i>Panel Admin</a></li>
                            @endcan
                            <li><a class="dropdown-item" href="/perfil"><i class="fas fa-cog me-2"></i>Mi Perfil</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="fas fa-sign-out-alt me-2"></i>Cerrar Sesión
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('login*') ? 'active' : '' }}" href="{{ route('login') }}">
                            <i class="fas fa-sign-in-alt me-1"></i>Ingresar
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('register*') ? 'active' : '' }}" href="{{ route('register') }}">
                            <i class="fas fa-user-plus me-1"></i>Registrarse
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav> -->

 <!-- Header Navigation -->
 <header class="header">
        <div class="nav-container">
            <a href="#" class="logo">misjueces.mx</a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#registro" class="nav-link">Ingreso</a>
                </li>
                <li class="nav-item">
                    <a href="explorador.html" class="nav-link">Explora</a>
                </li>
                <li class="nav-item">
                    <a href="#privacidad" class="nav-link">Legales</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user-circle me-1"></i>{{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            @can('manage users')
                                <li><a class="dropdown-item" href="/admin"><i class="fas fa-tools me-2"></i>Panel Admin</a></li>
                            @endcan
                            <li><a class="dropdown-item" href="/perfil"><i class="fas fa-cog me-2"></i>Mi Perfil</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="fas fa-sign-out-alt me-2"></i>Cerrar Sesión
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('login*') ? 'active' : '' }}" href="{{ route('login') }}">
                            <i class="fas fa-sign-in-alt me-1"></i>Ingresar
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('register*') ? 'active' : '' }}" href="{{ route('register') }}">
                            <i class="fas fa-user-plus me-1"></i>Registrarse
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </header>
