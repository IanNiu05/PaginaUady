@extends('layouts.inicio')

@section('titulo', 'Inicio - FCA UADY')

@section('contenido')


    <x-hero imagen="img/noticias/fachada.jpg" />

    <h2 class="titulo-seccion">Noticias Recientes</h2>

    <div class="contenedor-tarjetas">
        @foreach($noticias as $noticia)
            <x-card 
                imagen="{{ $noticia->imagen }}"
                fecha="{{ $noticia->fecha }}"
                titulo="{{ $noticia->titulo }}"
                texto="{{ $noticia->texto }}"
            >
                
                <x-boton ruta="{{ url('/contacto') }}" color="azul">
                    Más información
                </x-boton>
            </x-card>
        @endforeach
    </div>

@endsection