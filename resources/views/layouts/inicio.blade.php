<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo', 'FCA UADY')</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        /* --- ESTILOS GLOBALES --- */
        :root {
            --azul-uady: #1b365d;
            --dorado-uady: #cda043;
            --gris-fondo: #f8fafc;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--gris-fondo);
            margin: 0;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* --- NAVEGACIÓN --- */
        nav {
            background: var(--azul-uady);
            padding: 1rem 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .logo { color: white; font-weight: 800; font-size: 22px; letter-spacing: 1px; }

        .menu { display: flex; gap: 15px; }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 22px;
            border-radius: 6px;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.05);
        }

        nav a:hover, nav a.active {
            background: var(--dorado-uady);
            color: var(--azul-uady);
            transform: translateY(-2px);
        }

        /* --- CONTENIDO PRINCIPAL --- */
        main { flex: 1; }

        /* Estilos del Banner (Componente x-hero) */
        .banner {
            background-image: linear-gradient(rgba(27, 54, 93, 0.8), rgba(27, 54, 93, 0.8)),
                              url('https://images.unsplash.com/photo-1541339907198-e08756ebafe3?auto=format&fit=crop&w=1500&q=80');
            background-size: cover;
            background-position: center;
            height: 350px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .banner h1 {
            font-size: 42px;
            color: white;
            margin: 0;
            line-height: 1.2;
        }

        /* Estilos de la Sección de Noticias */
        .titulo-seccion { 
            text-align: center; 
            color: var(--azul-uady); 
            font-size: 28px; 
            margin: 50px 0 30px; 
            font-weight: 700;
        }

        .contenedor-tarjetas { 
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            padding: 0 50px 50px;
            max-width: 1300px;
            margin: 0 auto;
        }

        /* --- ESTILOS DE LA TARJETA (Componente x-card) --- */
        .tarjeta {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
            border: 1px solid #eee;
        }

        .tarjeta:hover { transform: translateY(-8px); }
        
        /* Imagen arriba con altura fija */
        .tarjeta-img { 
            height: 180px; 
            background: #e2e8f0; 
            object-fit: cover; 
            width: 100%;
        }
        
        /* Texto abajo */
        .tarjeta-body { 
            padding: 20px; 
            display: flex; 
            flex-direction: column; 
            flex-grow: 1; 
        }
        
        .fecha { 
            color: var(--dorado-uady); 
            font-size: 11px; 
            font-weight: 700; 
            margin-bottom: 8px; 
            text-transform: uppercase; 
            letter-spacing: 1px;
        }

        .tarjeta-titulo { 
            font-size: 16px; 
            font-weight: 700; 
            color: var(--azul-uady); 
            margin: 0 0 10px 0; 
            line-height: 1.4; 
        }

        .tarjeta-texto { font-size: 14px; color: #64748b; margin-bottom: 20px; flex-grow: 1; }
        
        /* Estilos del botón para el slot */
        .btn-leer {
            align-self: flex-start;
            background: var(--azul-uady);
            color: white;
            padding: 8px 20px;
            border-radius: 6px;
            font-size: 12px;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn-leer:hover { background: var(--dorado-uady); color: white; }
    </style>
</head>
<body>

    <nav>
        <div class="logo">FCA UADY</div>
        <div class="menu">
            {{-- Usamos url('/') para que Laravel sepa a dónde ir exactamente --}}
            <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Inicio</a>
            
            <a href="{{ url('/licenciaturas') }}" class="{{ Request::is('licenciaturas') ? 'active' : '' }}">Licenciaturas</a>
            
            <a href="{{ url('/posgrado') }}" class="{{ Request::is('posgrado') ? 'active' : '' }}">Posgrado</a>
            
            <a href="{{ url('/contacto') }}" class="{{ Request::is('contacto') ? 'active' : '' }}">Contacto</a>
        }
        </div>
    </nav>

    <main>
        @yield('contenido')
    </main>

    <x-footer />

</body>
</html>