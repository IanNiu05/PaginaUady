@extends('layouts.secundario')

@section('titulo', 'Contacto - FCA UADY')

@section('contenido')
    <div style="max-width: 1000px; margin: 50px auto; padding: 0 20px; text-align: center;">
        <h1 style="color: #1b365d; font-size: 32px; font-weight: 700; margin-bottom: 10px;">Contacto</h1>
        <p style="color: #64748b; font-size: 16px; margin-bottom: 40px;">Estamos aquí para ayudarte. Por favor, rellena el siguiente formulario:</p>
        
        <div style="display: flex; justify-content: center; text-align: left; background: #ffffff; padding: 40px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #eee;">
            <div style="width: 100%;">
                <x-formulario />
            </div>
        </div>

        </div>
@endsection