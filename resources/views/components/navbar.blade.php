@props(['menus' => []])

<nav class="navbar-fca">
    <a href="{{ url('/') }}" class="logo-container">
        <img src="{{ asset('img/logo.jpg') }}" alt="Logo" class="nav-logo-img">
    </a>
    
    <input type="checkbox" id="menu-check" style="display:none;">
    <label for="menu-check" class="menu-toggle">☰</label>

    <div class="menu">
        @if(count($menus) > 0)
            @foreach($menus as $menu)
                @php
                    $rutaLimpia = ltrim($menu->ruta, '/');
                    // Verifica si la ruta actual coincide para marcar como activa
                    $isActive = $rutaLimpia === '' ? Request::is('/') : Request::is($rutaLimpia . '*');
                @endphp

                @if(strtolower($menu->name) == 'licenciaturas')
                    <div class="dropdown">
                        <a href="{{ url($menu->ruta) }}" class="{{ $isActive ? 'active' : '' }}">
                            {{ $menu->name }} <small>▼</small>
                        </a>
                        <div class="dropdown-content">
                            <a href="#">Contador Público</a>
                            <a href="#">Administración</a>
                            <a href="#">Mercadotecnia</a>
                            <a href="#">Negocios Internacionales</a>
                        </div>
                    </div>

                @elseif(strtolower($menu->name) == 'posgrado')
                    <div class="dropdown">
                        <a href="{{ url($menu->ruta) }}" class="{{ $isActive ? 'active' : '' }}">
                            {{ $menu->name }} <small>▼</small>
                        </a>
                        <div class="dropdown-content">
                            <a href="#">Especializaciones</a>
                            <a href="#">Maestrías</a>
                            <a href="#">Doctorado</a>
                        </div>
                    </div>

                @else
                    <a href="{{ url($menu->ruta) }}" class="{{ $isActive ? 'active' : '' }}">
                        {{ $menu->name }}
                    </a>
                @endif
            @endforeach
        @endif
    </div>
</nav>

<style>
    .navbar-fca {
        background: var(--azul-uady);
        padding: 0 50px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 85px; /* Altura ajustada para el logo más grande */
        position: sticky;
        top: 0;
        z-index: 1000;
        box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    }

    .logo-container { display: flex; align-items: center; text-decoration: none; }
    
    .nav-logo-img { 
        height: 65px; /* Logo agrandado */
        background: white; 
        border-radius: 4px; 
        padding: 2px; 
        transition: transform 0.3s;
    }
    .nav-logo-img:hover { transform: scale(1.05); }

    .menu { display: flex; gap: 10px; align-items: center; }

    .menu a {
        color: var(--dorado-uady);
        text-decoration: none;
        padding: 10px 15px;
        font-weight: 600;
        font-size: 14px;
        transition: 0.3s;
    }

    .menu a:hover, .menu a.active {
        color: white;
    }

    /* Estilos del Dropdown */
    .dropdown { position: relative; }
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        min-width: 220px;
        box-shadow: 0px 8px 16px rgba(0,0,0,0.1);
        top: 100%;
        border-radius: 4px;
        overflow: hidden;
    }
    .dropdown-content a {
        color: var(--azul-uady) !important;
        display: block;
        padding: 12px 16px;
        border-bottom: 1px solid #eee;
        font-size: 13px;
    }
    .dropdown-content a:hover { background: #f8fafc; color: var(--dorado-uady) !important; }
    .dropdown:hover .dropdown-content { display: block; }

    /* Responsividad */
    .menu-toggle { display: none; color: var(--dorado-uady); font-size: 28px; cursor: pointer; }

    @media (max-width: 768px) {
        .navbar-fca { padding: 0 20px; height: 75px; }
        .nav-logo-img { height: 55px; }
        .menu-toggle { display: block; }
        .menu {
            display: none;
            position: absolute;
            top: 75px;
            left: 0;
            width: 100%;
            background: var(--azul-uady);
            flex-direction: column;
            padding: 20px 0;
            box-shadow: 0 10px 10px rgba(0,0,0,0.2);
        }
        #menu-check:checked ~ .menu { display: flex; }
        .dropdown-content { position: static; box-shadow: none; background: rgba(255,255,255,0.05); }
        .dropdown-content a { color: white !important; }
    }
</style>