<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'FCA UADY')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        :root { --azul-uady: #1b365d; --dorado-uady: #cda043; --gris-fondo: #f4f6f9; }
        body { font-family: 'Inter', sans-serif; background-color: var(--gris-fondo); margin: 0; color: #333; display: flex; flex-direction: column; min-height: 100vh; }

        /* NAVEGACIÓN PRINCIPAL */
        nav { background: var(--azul-uady); padding: 0 50px; display: flex; justify-content: space-between; align-items: center; height: 70px; box-shadow: 0 2px 10px rgba(0,0,0,0.2); }
        .logo { color: white; font-weight: 800; font-size: 22px; }
        .menu { display: flex; gap: 15px; }
        nav a { color: white; text-decoration: none; padding: 10px 22px; border-radius: 6px; font-weight: 600; font-size: 14px; transition: 0.3s; background: rgba(255, 255, 255, 0.05); }
        nav a:hover, nav a.active { background: var(--dorado-uady); color: var(--azul-uady); }

        /* ESTRUCTURA SECUNDARIA (DOS COLUMNAS) */
        .contenedor-interno { display: flex; max-width: 1200px; margin: 40px auto; gap: 30px; padding: 0 20px; flex: 1; width: 100%; box-sizing: border-box; }
        .menu-lateral { width: 250px; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05); height: fit-content; }
        .menu-lateral h3 { color: var(--azul-uady); border-bottom: 2px solid var(--dorado-uady); padding-bottom: 10px; margin-top: 0; }
        .menu-lateral a { display: block; padding: 12px 0; color: #555; text-decoration: none; border-bottom: 1px solid #eee; font-size: 14px; transition: 0.3s; }
        .menu-lateral a:hover { color: var(--azul-uady); font-weight: bold; padding-left: 5px; }
        .contenido-principal { flex-grow: 1; background: white; padding: 40px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05); }
    </style>
</head>
<body>

    <nav>
        <div class="logo">FCA UADY</div>
        <div class="menu">
            <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Inicio</a>
            <a href="{{ url('/licenciaturas') }}" class="{{ Request::is('licenciaturas') ? 'active' : '' }}">Licenciaturas</a>
            <a href="{{ url('/posgrado') }}" class="{{ Request::is('posgrado') ? 'active' : '' }}">Posgrado</a>
            <a href="{{ url('/contacto') }}" class="{{ Request::is('contacto') ? 'active' : '' }}">Contacto</a>
        </div>
    </nav>

    <x-header :titulo="$titulo ?? 'Sección FCA'" />

    <div class="contenedor-interno">
        <aside class="menu-lateral">
            <h3>Secciones</h3>
            <a href="{{ url('/') }}">← Volver al Inicio</a>
            <a href="{{ url('/licenciaturas') }}">Licenciaturas</a>
            <a href="#">Trámites Escolares</a>
            <a href="#">Servicio Social</a>
        </aside>

        <main class="contenido-principal">
            @yield('contenido')
        </main>
    </div>

    <x-footer />

</body>
</html>