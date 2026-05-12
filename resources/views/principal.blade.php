@extends('layouts.inicio')

@section('titulo', 'Inicio - FCA UADY')

@section('contenido')

    <x-hero :banners="$banners" />

    <h2 class="titulo-seccion">Noticias Recientes</h2>

    <div class="contenedor-tarjetas">
        @foreach($noticias as $noticia)
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
        @endforeach
    </div>

@endsection