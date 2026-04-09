@extends('layouts.secundario')

@section('title', $programa->nombre)

@section('content')
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl font-bold text-[#cda043] mb-6">{{ $programa->nombre }}</h1>
        
        @if($programa->imagen_banner)
            <img src="{{ asset('img/' . $programa->imagen_banner) }}" alt="Banner" class="w-full h-64 object-cover rounded-md mb-6">
        @endif

        <div class="prose max-w-none text-gray-700">
            <h2 class="text-2xl font-semibold text-blue-900 mt-6 mb-3">Descripción General</h2>
            <p>{{ $programa->descripcion }}</p>

            @if($programa->perfil_ingreso)
                <h2 class="text-2xl font-semibold text-blue-900 mt-6 mb-3">Perfil de Ingreso</h2>
                <p>{{ $programa->perfil_ingreso }}</p>
            @endif
        </div>
    </div>
@endsection