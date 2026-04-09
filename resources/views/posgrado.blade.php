@extends('layouts.secundario')

@section('contenido') {{-- O el nombre de tu sección principal --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach($posgrados as $posgrado)
           <x-card 
                :imagen="$posgrado->imagen_banner ? 'img/'.$posgrado->imagen_banner : 'img/noticias/orgullo.jpg'" 
                :fecha="''" 
                :titulo="$posgrado->nombre" 
                :texto="$posgrado->descripcion"
            >
                <a href="{{ route('posgrado.show', $posgrado->slug) }}">Ver más</a>
            </x-card>
        @endforeach
    </div>
@endsection