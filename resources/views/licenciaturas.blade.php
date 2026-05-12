@extends('layouts.secundario')

@section('titulo', 'Licenciaturas - FCA')

@section('contenido')
<div style="padding: 20px;">
  
    
    <div style="margin-bottom: 35px;">
        <h1 style="color: #1b365d; margin: 0; font-size: 2.2rem; font-weight: bold;">Programas de Licenciatura</h1>
        <p style="color: #64748b; margin-top: 10px; font-size: 1.1rem;">Formamos profesionales líderes con valores éticos y visión global.</p>
        <div style="width: 100px; height: 4px; background: #cda043; margin-top: 15px; border-radius: 2px;"></div>
    </div>

    
    <div class="mosaico-carreras">
        
        <a href="#" class="tarjeta-carrera">
            <div class="info-wrap">
                <span class="nombre-carrera">Contaduría</span>
            </div>
            <div class="boton-mas">Ver detalles →</div>
        </a>

        <a href="#" class="tarjeta-carrera">
            <div class="info-wrap">
                <span class="nombre-carrera">Administración de Empresas</span>
            </div>
            <div class="boton-mas">Ver detalles →</div>
        </a>

        <a href="#" class="tarjeta-carrera">
            <div class="info-wrap">
                <span class="nombre-carrera">Mercadotecnia</span>
            </div>
            <div class="boton-mas">Ver detalles →</div>
        </a>

        <a href="#" class="tarjeta-carrera">
            <div class="info-wrap">
                <span class="nombre-carrera">Administración de Tecnologías de la Información</span>
            </div>
            <div class="boton-mas">Ver detalles →</div>
        </a>

    </div>
</div>

<style>
    .mosaico-carreras {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        gap: 25px;
    }

    .tarjeta-carrera {
        text-decoration: none;
        background: #ffffff;
        aspect-ratio: 1 / 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        border-radius: 12px;
        border: 2px solid #f1f5f9;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        padding: 30px;
    }

    .tarjeta-carrera:hover {
        transform: translateY(-8px);
        border-color: #1b365d;
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }

    .nombre-carrera {
        color: #1b365d;
        font-weight: 700;
        font-size: 1.3rem;
        line-height: 1.2;
        text-transform: uppercase; 
    }

    .boton-mas {
        position: absolute;
        bottom: -50px;
        left: 0;
        width: 100%;
        background: #1b365d;
        color: #cda043;
        padding: 12px 0;
        font-weight: bold;
        font-size: 13px;
        transition: bottom 0.3s ease;
    }

    .tarjeta-carrera:hover .boton-mas {
        bottom: 0;
    }

    @media (max-width: 600px) {
        .tarjeta-carrera {
            aspect-ratio: auto;
            min-height: 180px;
        }
    }
</style>
@endsection