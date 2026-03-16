@extends('layouts.secundario')

@section('titulo', 'Contacto - FCA UADY')

@section('contenido')
    <div style="max-width: 600px; margin: 0 auto; text-align: center;">
        <h1 style="color: #1b365d;">Contacto</h1>
        <p>Estamos aquí para ayudarte. Por favor, rellena el siguiente formulario:</p>
        
        <div style="margin-top: 30px; display: flex; justify-content: center; text-align: left;">
            <div style="width: 100%; display: flex; justify-content: center;">
                <x-formulario />
            </div>
        </div>

        <hr style="margin: 40px 0; border: 0; border-top: 1px solid #eee;">
        
        <p><strong>Ubicación:</strong> Antigua Carretera a Tizimín Km. 1, Cholul, 97130 Mérida, Yuc.</p>
        <p><strong>Teléfono:</strong> (999) 981 0926</p>
    </div>
@endsection