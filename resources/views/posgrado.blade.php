@extends('layouts.secundario')

@section('titulo', 'Posgrado e Investigación - FCA UADY')

@section('contenido')
    @php
        // diccionario para asignar automáticamente la imagen correcta según el nombre en la BD
        $imagenesProgramas = [
            'Administración Financiera' => 'admin.jpg',
            'Gestión de Organizaciones' => 'gestion.jpg',
            'Mercadotecnia Digital' => 'digital.jpg',
            'Ciencias de la Administración' => 'ciencias.jpg'
        ];
    @endphp

    <div style="max-width: 1000px; margin: 0 auto; font-family: 'Inter', sans-serif;">
        
        <div style="text-align: center; margin-bottom: 40px;">
            <h2 style="color: #1b365d; border-bottom: 3px solid #cda043; padding-bottom: 10px; display: inline-block; font-size: 28px; font-weight: 800; text-transform: uppercase; margin-top: 0;">
                Posgrado e Investigación
            </h2>
            <p style="color: #64748b; font-size: 16px; margin-top: 10px; font-weight: 400;">
                Contenido dinámico desde la Base de Datos.
            </p>
        </div>

        <h2 id="maestrias" class="subtitulo-programa">Maestrías</h2>
        
        <div style="display: flex; flex-direction: column; gap: 40px; margin-top: 20px; margin-bottom: 60px;">
            @forelse($maestrias as $m)
                @php
                    $imgNombre = $imagenesProgramas[$m->nombre] ?? 'fachada.jpg';
                @endphp
                <div class="fade-in-card" style="display: flex; flex-direction: {{ $loop->index % 2 !== 0 ? 'row-reverse' : 'row' }}; align-items: center; gap: 30px; background-color: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.04); border: 1px solid #eef0f3;">
                    
                    <div style="flex: 1; position: relative; height: 240px; border-radius: 6px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1); width: 100%;">
                        <img src="{{ asset('img/' . $imgNombre) }}" alt="{{ $m->nombre }}" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(27, 54, 93, 0.65);"></div>
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; padding: 15px; box-sizing: border-box;">
                            <h3 style="color: #ffffff; font-size: 20px; font-weight: 700; text-align: center; text-transform: uppercase; margin: 0; letter-spacing: 0.5px; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
                                {{ $m->nombre }}
                            </h3>
                        </div>
                    </div>
                    
                    <div style="flex: 1; display: flex; align-items: center; padding: 5px 0;">
                        <p style="color: #333333; font-size: 15px; line-height: 1.6; margin: 0; text-align: justify;">
                            {{ $m->descripcion }}
                        </p>
                    </div>

                </div>
            @empty
                <p style="color: #666; font-style: italic;">No hay maestrías registradas actualmente.</p>
            @endforelse
        </div>

        <h2 id="doctorados" class="subtitulo-programa">Doctorados</h2>
        
        <div style="display: flex; flex-direction: column; gap: 40px; margin-top: 20px;">
            @forelse($doctorados as $d)
                @php
                    $imgNombre = $imagenesProgramas[$d->nombre] ?? 'fachada.jpg';
                @endphp
                
                <div class="fade-in-card" style="display: flex; flex-direction: row; align-items: center; gap: 30px; background-color: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.04); border: 1px solid #eef0f3;">
                    
                    <div style="flex: 1; position: relative; height: 240px; border-radius: 6px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1); width: 100%;">
                        <img src="{{ asset('img/' . $imgNombre) }}" alt="{{ $d->nombre }}" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(27, 54, 93, 0.65);"></div>
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; padding: 15px; box-sizing: border-box;">
                            <h3 style="color: #ffffff; font-size: 20px; font-weight: 700; text-align: center; text-transform: uppercase; margin: 0; letter-spacing: 0.5px; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
                                {{ $d->nombre }}
                            </h3>
                        </div>
                    </div>
                    
                    <div style="flex: 1; display: flex; align-items: center; padding: 5px 0;">
                        <p style="color: #333333; font-size: 15px; line-height: 1.6; margin: 0; text-align: justify;">
                            {{ $d->descripcion }}
                        </p>
                    </div>

                </div>
            @empty
                <p style="color: #666; font-style: italic;">No hay doctorados registrados actualmente.</p>
            @endforelse
        </div>

    </div>

    <style>
        html {
            scroll-behavior: smooth;
        }

        .subtitulo-programa {
            color: #1b365d; 
            font-size: 24px; 
            font-weight: 700; 
            border-left: 4px solid #cda043; 
            padding-left: 12px; 
            margin: 0 0 20px 0;
            scroll-margin-top: 100px;
        }

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
                threshold: 0.12 
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