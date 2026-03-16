@props(['ruta', 'color' => 'azul'])

<a href="{{ $ruta }}" 
   class="btn-fca btn-{{ $color }}" 
   style="display: inline-block; position: relative; z-index: 50; pointer-events: auto !important; cursor: pointer !important;">
    {{ $slot }}
</a>

<style>
    .btn-fca {
        padding: 10px 20px;
        border-radius: 6px;
        text-decoration: none;
        font-weight: 700;
        font-size: 14px;
        transition: 0.3s;
        border: none;
    }
    .btn-azul { background-color: #1b365d; color: white; }
    .btn-azul:hover { background-color: #cda043; color: #1b365d; }
</style>