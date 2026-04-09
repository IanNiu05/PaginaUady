@extends('layouts.secundario')

@section('titulo', 'Licenciaturas - FCA UADY')

@section('contenido')
    <h1 style="color: #1b365d; border-bottom: 3px solid #cda043; padding-bottom: 10px;">Programas de Licenciatura</h1>
    <p>Formamos profesionales líderes con valores éticos y visión global.</p>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-top: 30px;">
        
        @foreach($licenciaturas as $lic)
            
            <x-card 
                imagen="{{ $lic->imagen_banner ? 'img/'.$lic->imagen_banner : 'img/noticias/fachada.jpg' }}" 
                fecha="" 
                titulo="{{ $lic->nombre }}" 
                texto="{{ Str::limit($lic->descripcion, 100) }}"
            >
                <a href="/licenciaturas/{{ $lic->slug }}" style="display: inline-block; margin-top: 15px; color: #cda043; text-decoration: none; font-weight: bold; padding: 5px 10px; border: 1px solid #cda043; border-radius: 5px;">
                    Ver detalles &rarr;
                </a>
            </x-card>

        @endforeach

    </div>
@endsection