@extends('layouts.inicio')

@section('titulo', 'Inicio - FCA UADY')

@section('contenido')
    <x-hero :banners="$banners" />

    <div class="noticias-carousel-wrapper">
        <h2 class="titulo-seccion">Noticias Recientes</h2>
        
        <div class="carousel-noticias-container">
            <button class="btn-nav-noticia prev-noticia" onclick="moveNoticias(-1)">&#10094;</button>
            
            <div class="slider-noticias-clip">
                <div class="contenedor-tarjetas-slider" id="noticiasTrack">
                    {{-- El ciclo recorre automáticamente las 8 noticias de la base de datos --}}
                    @foreach($noticias as $noticia)
                        <div class="tarjeta-slide-item">
                            <x-card 
                                imagen="{{ asset('img/noticias/' . $noticia->imagen) }}"
                                fecha="{{ $noticia->fecha }}"
                                titulo="{{ $noticia->titulo }}"
                                texto="{{ $noticia->texto }}"
                            >
                                <x-boton ruta="{{ route('noticia.mostrar', $noticia->id) }}" color="azul">
                                    Más información
                                </x-boton>
                            </x-card>
                        </div>
                    @endforeach
                </div>
            </div>

            <button class="btn-nav-noticia next-noticia" onclick="moveNoticias(1)">&#10095;</button>
        </div>
    </div>

    <style>
        .noticias-carousel-wrapper {
            max-width: 1200px;
            margin: 50px auto;
            padding: 0 20px;
            font-family: 'Inter', sans-serif;
        }
        
        .titulo-seccion {
            color: #1b365d;
            border-bottom: 3px solid #cda043;
            padding-bottom: 10px;
            margin-bottom: 30px;
            font-size: 26px;
            font-weight: 800;
            text-transform: uppercase;
        }
        
        .carousel-noticias-container {
            display: flex;
            align-items: center;
            position: relative;
            gap: 15px;
        }
        
        .slider-noticias-clip {
            overflow: hidden; 
            width: 100%;
            padding: 15px 5px;
        }
        
        .contenedor-tarjetas-slider {
            display: flex;
            gap: 24px; 
            transition: transform 0.4s ease-in-out; 
        }
        
        .tarjeta-slide-item {
            flex: 0 0 calc(33.333% - 16px); 
            box-sizing: border-box;
        }
        
        .btn-nav-noticia {
            background: #1b365d;
            color: #ffffff;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 20px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10;
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
            transition: background 0.3s, transform 0.2s;
            flex-shrink: 0;
        }
        
        .btn-nav-noticia:hover {
            background: #cda043; 
            transform: scale(1.1);
        }
        
        @media (max-width: 992px) {
            .tarjeta-slide-item {
                flex: 0 0 calc(50% - 12px);
            }
        }
        
        @media (max-width: 600px) {
            .tarjeta-slide-item {
                flex: 0 0 100%;
            }
            .btn-nav-noticia {
                width: 40px;
                height: 40px;
                font-size: 16px;
            }
        }
    </style>

    <script>
        let currentNoticiaIndex = 0;
        const track = document.getElementById('noticiasTrack');
        
        function moveNoticias(direction) {
            const items = document.querySelectorAll('.tarjeta-slide-item');
            const totalItems = items.length;
            if (totalItems === 0) return;

            let itemsPerPage = 3;
            if (window.innerWidth <= 600) itemsPerPage = 1;
            else if (window.innerWidth <= 992) itemsPerPage = 2;

            const maxIndex = totalItems - itemsPerPage;

            currentNoticiaIndex += direction;
            
            // seguridad para no salirnos de los límites de las 8 noticias
            if (currentNoticiaIndex < 0) {
                currentNoticiaIndex = 0; 
            } else if (currentNoticiaIndex > maxIndex) {
                currentNoticiaIndex = maxIndex; 
            }
            
            const itemWidth = items[0].getBoundingClientRect().width;
            const gap = 24; 
            
            const amountToMove = currentNoticiaIndex * (itemWidth + gap);
            track.style.transform = `translateX(-${amountToMove}px)`;
        }
        
        window.addEventListener('resize', () => {
            currentNoticiaIndex = 0;
            track.style.transform = 'translateX(0px)';
        });
    </script>
@endsection