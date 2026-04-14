<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'FCA UADY')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
     
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

        main { flex: 1; }

      
        .titulo-seccion { 
            text-align: center; color: var(--azul-uady); font-size: 28px; margin: 50px 0 30px; font-weight: 700;
        }
        
        .contenedor-tarjetas { 
            display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px; padding: 0 50px 50px; max-width: 1300px; margin: 0 auto;
        }
        
        .tarjeta {
            background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.05); transition: transform 0.3s ease; display: flex; flex-direction: column; border: 1px solid #eee;
        }
        
        .tarjeta:hover { transform: translateY(-8px); }
        .tarjeta-img { height: 180px; background: #e2e8f0; object-fit: cover; width: 100%; }
        .tarjeta-body { padding: 20px; display: flex; flex-direction: column; flex-grow: 1; }
        .fecha { color: var(--dorado-uady); font-size: 11px; font-weight: 700; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 1px; }
        .tarjeta-titulo { font-size: 16px; font-weight: 700; color: var(--azul-uady); margin: 0 0 10px 0; line-height: 1.4; }
        .tarjeta-texto { font-size: 14px; color: #64748b; margin-bottom: 20px; flex-grow: 1; }
        .btn-leer { align-self: flex-start; background: var(--azul-uady); color: white; padding: 8px 20px; border-radius: 6px; font-size: 12px; text-decoration: none; transition: 0.3s; }
        .btn-leer:hover { background: var(--dorado-uady); color: white; }

       
       .acceso-pildora, .acceso-pildora:visited {
    background: var(--azul-uady);
    color: white;
    padding: 15px 20px;
    border-radius: 12px;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 18px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px rgba(27, 54, 93, 0.15);
}

.acceso-pildora:visited h3, 
.acceso-pildora:visited p {
    color: white;
}

.acceso-pildora:hover {
    background: var(--dorado-uady);
    color: var(--azul-uady);
    transform: translateX(5px);
    box-shadow: -5px 8px 15px rgba(205, 160, 67, 0.2);
}

.acceso-pildora:hover h3, 
.acceso-pildora:hover p {
    color: var(--azul-uady);
}

.acceso-icono-pildora {
    font-size: 26px;
    background: rgba(255, 255, 255, 0.1);
    min-width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    transition: all 0.3s ease;
}

.acceso-pildora:hover .acceso-icono-pildora {
    background: rgba(27, 54, 93, 0.1);
}

@media (max-width: 768px) {
    .contenedor-tarjetas { padding: 0 20px 30px; }
}
    </style>
</head>
<body>

    <x-navbar :menus="$menus ?? []" />

    <main>
        @yield('contenido')

        <div style="max-width: 1300px; margin: 0 auto 60px; padding: 0 50px;">
            <h2 class="titulo-seccion" style="margin-top: 20px; text-align: left; margin-bottom: 25px;">Accesos Rápidos</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px;">
                
                @if(isset($accesos))
                    @foreach($accesos as $acceso)
                    <a href="{{ $acceso->url }}" class="acceso-pildora">
                        <div class="acceso-icono-pildora">{{ $acceso->icono }}</div>
                        <div>
                            <h3 style="margin: 0; font-size: 15px; font-weight: 700;">{{ $acceso->titulo }}</h3>
                            <p style="font-size: 12px; margin: 4px 0 0; opacity: 0.8;">{{ $acceso->subtitulo }}</p>
                        </div>
                    </a>
                    @endforeach
                @endif
                
            </div>
        </div>

        <div style="max-width: 1300px; margin: 0 auto 60px; padding: 0 50px;">
            <div style="display: flex; flex-wrap: wrap; gap: 30px;">
                
                <div style="flex: 1 1 60%; min-width: 300px; background: #000; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    @if(isset($multimedia))
                        <iframe width="100%" height="380" src="https://www.youtube.com/embed/{{ $multimedia->youtube_id }}" title="Conoce a la Universidad Autónoma de Yucatán - UADY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="display: block;"></iframe>
                    @endif
                </div>
                
                <div style="flex: 1 1 35%; min-width: 300px; background: white; border-radius: 8px; border: 1px solid #ddd; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); display: flex; flex-direction: column;">
                    <div style="padding: 15px; border-bottom: 1px solid #eee; display: flex; align-items: center; gap: 10px;">
                        <img src="{{ asset('img/logo.jpg') }}" alt="UADY" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;">
                        <div>
                            <strong style="color: var(--azul-uady); font-size: 14px;">Universidad Autónoma de Yucatán UADY</strong>
                            <div style="font-size: 12px; color: #666;">hace 38 minutos</div>
                        </div>
                    </div>
                    <div style="padding: 20px; flex: 1; background: #f8fafc; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
                        @if(isset($multimedia))
                            <p style="font-size: 13px; color: #555; margin-bottom: 15px;">{{ $multimedia->fb_post_text }}</p>
                            <a href="{{ $multimedia->fb_post_url }}" target="_blank" style="color: #1877f2; text-decoration: none; font-weight: bold; font-size: 14px;">Ver publicación en Facebook</a>
                        @endif
                    </div>
                </div>

            </div>
        </div>

        <div style="max-width: 1300px; margin: 0 auto 80px; padding: 0 50px;">
            <div style="display: flex; flex-wrap: wrap; background: var(--azul-uady); border-radius: 20px; overflow: hidden; box-shadow: 0 15px 35px rgba(27, 54, 93, 0.2);">
                
                <div style="flex: 1 1 50%; padding: clamp(30px, 5vw, 60px); display: flex; flex-direction: column; justify-content: center;">
                    <div style="width: 60px; height: 4px; background: var(--dorado-uady); margin-bottom: 25px; border-radius: 2px;"></div>
                    <h2 style="color: white; font-size: clamp(28px, 4vw, 38px); margin-top: 0; margin-bottom: 20px; line-height: 1.2;">
                        Impulsa tu futuro en la FCA
                    </h2>
                    <p style="color: #cbd5e1; font-size: 17px; line-height: 1.6; margin-bottom: 40px; max-width: 90%;">
                        Únete a una comunidad de excelencia. Descubre nuestros programas académicos diseñados para formar a los líderes y administradores del mañana con visión global.
                    </p>
                    <div>
                        <a href="{{ url('/licenciaturas') }}" style="display: inline-block; background-color: var(--dorado-uady); color: var(--azul-uady); padding: 14px 32px; border-radius: 8px; font-weight: 700; text-decoration: none; font-size: 16px; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(205, 160, 67, 0.3);" onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 8px 20px rgba(205, 160, 67, 0.4)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(205, 160, 67, 0.3)'">
                            Explorar Licenciaturas <span>→</span>
                        </a>
                    </div>
                </div>

                <div style="flex: 1 1 40%; min-height: 350px; background-image: url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1000&q=80'); background-size: cover; background-position: center; position: relative;">
                    <div style="position: absolute; inset: 0; background: linear-gradient(to right, var(--azul-uady) 0%, rgba(27, 54, 93, 0.2) 100%);"></div>
                </div>

            </div>
        </div>
        
    </main>

    <x-footer :datos="$infoFooter ?? []" />

</body>
</html>