@props(['menus' => []])

<nav class="navbar-fca">
    <a href="{{ url('/') }}" class="logo-container">
        <img src="{{ asset('img/Logo UADY.png') }}" alt="Logo" class="nav-logo-img">
        
        <div class="uady-text-container">
            <span class="fca-title">Facultad de Contaduría y Administración</span>
        </div>
    </a>
    
    <input type="checkbox" id="menu-check" style="display:none;">
    <label for="menu-check" class="menu-toggle">☰</label>

    <div class="menu">
        @if(count($menus) > 0)
            @foreach($menus as $menu)
                @php
                    $rutaLimpia = ltrim($menu->ruta, '/');
                    $isActive = $rutaLimpia === '' ? Request::is('/') : Request::is($rutaLimpia . '*');
                @endphp

                @if(strtolower($menu->name) == 'licenciaturas')
                    <div class="dropdown">
                        <a href="{{ url($menu->ruta) }}" class="{{ $isActive ? 'active' : '' }}">
                            {{ $menu->name }} <small>▼</small>
                        </a>
                        <div class="dropdown-content">
                            <a href="{{ url('/licenciaturas/contador-publico') }}">Contador Público</a>
                            <a href="{{ url('/licenciaturas/administracion') }}">Administración</a>
                            <a href="{{ url('/licenciaturas/mercadotecnia-y-negocios-internacionales') }}">Mercadotecnia y Negocios Internacionales</a>
                            <a href="{{ url('/licenciaturas/administracion-de-tecnologias-de-informacion') }}">Administración de TI</a>
                        </div>
                    </div>
                @elseif(strtolower($menu->name) == 'posgrado')
                    <div class="dropdown">
                        <a href="{{ url($menu->ruta) }}" class="{{ $isActive ? 'active' : '' }}">
                            {{ $menu->name }} <small>▼</small>
                        </a>
                        <div class="dropdown-content">
                            <a href="{{ url('/posgrado#maestrias') }}">Maestrías</a>
                            <a href="{{ url('/posgrado#doctorados') }}">Doctorados</a>
                        </div>
                    </div>
                {{-- Apartado de servicios --}}
                @elseif(strtolower($menu->name) == 'servicios')
                    <div class="dropdown">
                        <a href="#" class="{{ Request::is('tramites-escolares*') || Request::is('bolsa-de-trabajo*') ? 'active' : '' }}">
                            {{ $menu->name }} <small>▼</small>
                        </a>
                        <div class="dropdown-content">
                            <a href="{{ url('/tramites-escolares') }}">Trámites escolares</a>
                            <a href="{{ url('/bolsa-de-trabajo') }}">Bolsa de trabajo</a>
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
        background: #ffffff;
        padding: 0 50px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 85px;
        position: sticky;
        top: 0;
        z-index: 1000;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .logo-container { 
        display: flex; 
        align-items: center; 
        text-decoration: none; 
        gap: 15px;
    }
    
    .nav-logo-img { 
        height: 60px;
        width: auto;
        mix-blend-mode: normal; 
        filter: none;
        transition: transform 0.3s;
    }

    .uady-text-container {
        border-left: 2px solid var(--dorado-uady); 
        padding-left: 15px;
        display: flex;
        align-items: center;
    }

    .fca-title {
        color: var(--azul-uady);
        font-size: 19px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-family: 'Times New Roman', Times, serif;
        max-width: 280px;
        line-height: 1.1;
    }

    .nav-logo-img:hover { transform: scale(1.05); }

    .menu { display: flex; gap: 10px; align-items: center; }
    
    .menu a {
        color: var(--azul-uady); 
        text-decoration: none;
        padding: 10px 15px;
        font-weight: 600;
        font-size: 16px; 
        transition: 0.3s;
    }
    
    .menu a:hover, .menu a.active { 
        color: var(--dorado-uady); 
    }

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
        font-size: 14px;
    }
    
    .dropdown-content a:hover { 
        background: #f8fafc; 
        color: var(--dorado-uady) !important; 
    }
    
    .dropdown:hover .dropdown-content { display: block; }

    .menu-toggle { display: none; color: var(--azul-uady); font-size: 28px; cursor: pointer; }

    @media (max-width: 768px) {
        .navbar-fca { padding: 0 20px; height: 75px; }
        .nav-logo-img { height: 50px; }
        .fca-title { font-size: 13px; max-width: 190px; }
        .menu-toggle { display: block; }
        .menu {
            display: none;
            position: absolute;
            top: 75px;
            left: 0;
            width: 100%;
            background: #ffffff;
            flex-direction: column;
            padding: 20px 0;
            box-shadow: 0 10px 10px rgba(0,0,0,0.05);
        }
        #menu-check:checked ~ .menu { display: flex; }
        .dropdown-content { position: static; box-shadow: none; background: #f8fafc; }
    }
</style>