@extends('layouts.secundario')

@section('contenido')
<div class="contenedor-contacto">
    <h2>{{ $titulo ?? 'Contacto' }}</h2>

    {{-- Mensaje de éxito al enviar --}}
    @if(session('success'))
        <div style="background-color: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid-contacto" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        
        {{-- Lado Izquierdo: Información dinámica de la BD --}}
        <div class="info-bd">
            <h3>Información de la Facultad</h3>
            @foreach($informacion as $info)
    <p>
        <i class="{{ $info->icono }}"></i> 
        <strong>{{ ucfirst($info->clave) }}:</strong> {{ $info->valor }}
    </p>
@endforeach
        </div>

        {{-- Lado Derecho: Formulario --}}
        <div class="formulario-envio">
            <form action="{{ route('contacto.enviar') }}" method="POST">
                @csrf {{-- ¡IMPORTANTE! Sin esto Laravel da error 419 --}}

                <div style="margin-bottom: 15px;">
                    <label>Nombre completo:</label><br>
                    <input type="text" name="nombre" style="width: 100%; padding: 8px;" required>
                </div>

                <div style="margin-bottom: 15px;">
                    <label>Correo electrónico:</label><br>
                    <input type="email" name="email" style="width: 100%; padding: 8px;" required>
                </div>

                <div style="margin-bottom: 15px;">
                    <label>Mensaje:</label><br>
                    <textarea name="mensaje" rows="5" style="width: 100%; padding: 8px;" required></textarea>
                </div>

                <button type="submit" style="background-color: #003366; color: white; padding: 10px 20px; border: none; cursor: pointer;">
                    Enviar Comentario
                </button>
            </form>
        </div>
    </div>
</div>
@endsection