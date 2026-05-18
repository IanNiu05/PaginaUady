@extends('layouts.secundario')

@section('titulo', $licenciatura->nombre . ' - FCA UADY')

@section('contenido')
    <div style="font-family: 'Inter', sans-serif; max-width: 900px; margin: 0 auto;">
        
        <a href="{{ url('/licenciaturas') }}" style="display: inline-block; color: var(--azul-uady); text-decoration: none; font-weight: 700; font-size: 14px; margin-bottom: 20px;">
            ← Volver a todas las licenciaturas
        </a>

        <div style="position: relative; width: 100%; height: 320px; border-radius: 10px; overflow: hidden; margin-bottom: 35px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
            <img src="{{ asset('img/' . $licenciatura->imagen) }}" alt="{{ $licenciatura->nombre }}" style="width: 100%; height: 100%; object-fit: cover;">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(27, 54, 93, 0.55);"></div>
            <div style="position: absolute; bottom: 30px; left: 30px; right: 30px;">
                <h1 style="color: #ffffff; font-size: 32px; font-weight: 800; text-transform: uppercase; margin: 0; text-shadow: 2px 2px 8px rgba(0,0,0,0.6); line-height: 1.2;">
                    {{ $licenciatura->nombre }}
                </h1>
            </div>
        </div>

        <div style="line-height: 1.8; color: #333333; text-align: justify;">
            <h2 style="color: var(--azul-uady); border-bottom: 2px solid var(--dorado-uady); padding-bottom: 6px; font-size: 22px; font-weight: 700; margin-top: 0; text-transform: uppercase;">
                Información General del Programa
            </h2>
            
            <div style="margin-top: 20px; font-size: 16px; white-space: pre-line; color: #444444;">
                {{ $licenciatura->descripcion_completa }}
            </div>
        </div>

    </div>
@endsection