@extends('layouts.secundario')

@section('titulo', $noticia->titulo)

@section('contenido')
<div style="padding: 20px;">
    
    <div style="margin-bottom: 30px;">
        <h1 style="color: #1b365d; margin: 0; font-size: 2.2rem;">{{ $noticia->titulo }}</h1>
        <p style="color: #cda043; font-weight: bold; margin-top: 10px;">{{ $noticia->fecha }}</p>
        <hr style="border: 0; border-top: 1px solid #eee; margin-top: 20px;">
    </div>

    
    <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;"> 
        
        
        @if($noticia->imagen)
            <div style="flex: 1 1 45%; min-width: 300px;">
                <img src="{{ asset('img/noticias/' . $noticia->imagen) }}" 
                     style="width: 100%; height: auto; border-radius: 12px; box-shadow: 0 8px 20px rgba(0,0,0,0.1); display: block;">
            </div>
        @endif

       
        <div style="flex: 1 1 45%; min-width: 300px;">
            <div style="font-size: 17px; line-height: 1.8; color: #475569; text-align: justify; white-space: pre-line;">
                {{ $noticia->texto }}
            </div>

            <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #f1f5f9;">
                <a href="{{ url('/') }}" style="text-decoration: none; color: #1b365d; font-weight: bold;">
                    ← Volver al inicio
                </a>
            </div>
        </div>
    </div>
</div>
@endsection