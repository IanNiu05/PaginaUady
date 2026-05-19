@extends('layouts.secundario')

@section('titulo', 'Licenciaturas - FCA UADY')

@section('contenido')
    <div style="max-width: 1000px; margin: 0 auto; font-family: 'Inter', sans-serif;">
        
        <div style="text-align: center; margin-bottom: 40px;">
            <h2 style="color: #1b365d; border-bottom: 3px solid #cda043; padding-bottom: 10px; display: inline-block; font-size: 28px; font-weight: 800; text-transform: uppercase; margin-top: 0;">
                Programas de Licenciatura
            </h2>
            <p style="color: #666; font-size: 16px; margin-top: 10px; font-weight: 400;">
                Formamos profesionales líderes con valores éticos y visión global.
            </p>
        </div>

        <div style="display: flex; flex-direction: column; gap: 40px; margin-top: 20px;">
            @foreach($licenciaturas as $licenciatura)
    
                <div class="fade-in-card" style="display: flex; flex-direction: {{ $loop->index % 2 !== 0 ? 'row-reverse' : 'row' }}; align-items: center; gap: 30px; background-color: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.04); border: 1px solid #eef0f3;">
                    
                    <div style="flex: 1; position: relative; height: 240px; border-radius: 6px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                        <img src="{{ asset('img/' . $licenciatura->imagen) }}" alt="{{ $licenciatura->nombre }}" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(27, 54, 93, 0.65);"></div>
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; padding: 15px; box-sizing: border-box;">
                            <h3 style="color: #ffffff; font-size: 20px; font-weight: 700; text-align: center; text-transform: uppercase; margin: 0; letter-spacing: 0.5px; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
                                {{ $licenciatura->nombre }}
                            </h3>
                        </div>
                    </div>
                    
                    <div style="flex: 1; display: flex; flex-direction: column; justify-content: space-between; min-height: 180px; padding: 5px 0;">
                        <div>
                            <p style="color: #333333; font-size: 15px; line-height: 1.6; margin: 0; text-align: justify;">
                                {{ $licenciatura->descripcion_corta }}
                            </p>
                        </div>
                        
                        <div style="text-align: {{ $loop->index % 2 !== 0 ? 'left' : 'right' }}; margin-top: 15px;">
                            <a href="{{ route('licenciaturas.detalle', $licenciatura->slug) }}" style="display: inline-block; background-color: #1b365d; color: #ffffff; font-weight: bold; font-size: 13px; text-transform: uppercase; padding: 10px 20px; text-decoration: none; border-radius: 4px; border-bottom: 3px solid #cda043; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                                Ver más detalles
                            </a>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>

    </div>

    <style>
        .fade-in-card {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
            will-change: opacity, transform;
        }
        .fade-in-card.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tarjetas = document.querySelectorAll('.fade-in-card');
            
            const opciones = {
                root: null, 
                threshold: 0.15 
            };

            const observador = new IntersectionObserver(function(entradas, observador) {
                entradas.forEach(entrada => {
                    if (entrada.isIntersecting) {
                        entrada.target.classList.add('visible');
                        observador.unobserve(entrada.target);
                    }
                });
            }, opciones);

            tarjetas.forEach(tarjeta => {
                observador.observe(tarjeta);
            });
        });
    </script>
@endsection