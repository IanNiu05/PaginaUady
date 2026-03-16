@props(['imagen', 'fecha', 'titulo', 'texto'])

<div class="tarjeta">
    <div class="tarjeta-img" style="height: 200px; width: 100%; overflow: hidden;">
        <img src="{{ asset($imagen) }}" alt="{{ $titulo }}" style="width: 100%; height: 100%; object-fit: cover; display: block;">
    </div>
    
    <div class="tarjeta-body">
        <div class="fecha">{{ $fecha }}</div>
        <h3 class="tarjeta-titulo">{{ $titulo }}</h3>
        <p class="tarjeta-texto">{{ $texto }}</p>
        
        <div style="margin-top: auto; position: relative; z-index: 10;">
            {{ $slot }}
        </div>
    </div>
</div>