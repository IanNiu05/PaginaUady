@extends('layouts.secundario')

@section('titulo', 'Posgrado - FCA UADY')

@section('contenido')
<div class="posgrado-seccion">
    
    <header class="posgrado-encabezado">
        <h1 style="color: #1b365d; margin: 0; font-size: 28px;">Posgrado e Investigación</h1>
        <p style="color: #64748b; margin-top: 5px;">Contenido dinámico desde la Base de Datos.</p>
    </header>

    @if($maestrias->count() > 0)
        <h2 style="color: #1b365d; margin: 30px 0 15px;">Maestrías</h2>
        <div class="posgrado-lista">
            @foreach($maestrias as $index => $m)
                <a href="#" class="posgrado-tarjeta">
                    <div class="posgrado-numero">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</div>
                    <div class="posgrado-info">
                        <h3>{{ $m->nombre }}</h3>
                        <p>{{ $m->descripcion }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    @endif

    @if($doctorados->count() > 0)
        <h2 style="color: #1b365d; margin: 40px 0 15px;">Doctorados</h2>
        <div class="posgrado-lista">
            @foreach($doctorados as $index => $d)
                <a href="#" class="posgrado-tarjeta">
                    <div class="posgrado-numero">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</div>
                    <div class="posgrado-info">
                        <h3>{{ $d->nombre }}</h3>
                        <p>{{ $d->descripcion }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    @endif

</div>
@endsection