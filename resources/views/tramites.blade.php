@extends('layouts.secundario')

@section('titulo', 'Trámites Escolares - FCA UADY')

@section('contenido')
    <div style="margin-bottom: 35px;">
        <h2 style="color: var(--azul-uady); margin: 0; font-size: 24px;">Trámites y Servicios Escolares</h2>
        <p style="color: #64748b; font-size: 14px;">Gestiona tus solicitudes de documentos oficiales, becas y apoyos universitarios.</p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 25px;">
        @forelse($tramites as $tramite)
            <div style="background: white; border: 1px solid #e2e8f0; border-radius: 12px; padding: 25px; display: flex; flex-direction: column; justify-content: space-between; transition: 0.3s; box-shadow: 0 2px 4px rgba(0,0,0,0.02);" onmouseover="this.style.borderColor='var(--dorado-uady)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';" onmouseout="this.style.borderColor='#e2e8f0'; this.style.boxShadow='0 2px 4px rgba(0,0,0,0.02)';">
                
                <div>
                    <span style="background: #f1f5f9; color: var(--azul-uady); padding: 4px 10px; border-radius: 6px; font-size: 11px; font-weight: bold; text-transform: uppercase; letter-spacing: 0.5px; display: inline-block; margin-bottom: 12px;">
                        📂 {{ $tramite->categoria }}
                    </span>

                    <h3 style="margin: 0 0 10px 0; color: var(--azul-uady); font-size: 17px; font-weight: 700; line-height: 1.3;">
                        {{ $tramite->titulo }}
                    </h3>

                    <p style="font-size: 13px; color: #555; line-height: 1.5; margin: 0 0 15px 0;">
                        {{ $tramite->descripcion }}
                    </p>

                    <div style="background: #f8fafc; border-radius: 8px; padding: 12px; margin-bottom: 15px; border-left: 3px solid var(--dorado-uady);">
                        <strong style="font-size: 11px; color: #475569; display: block; text-transform: uppercase; margin-bottom: 4px;">Requisitos clave:</strong>
                        <p style="margin: 0; font-size: 12px; color: #64748b; line-height: 1.4;">{{ $tramite->requisitos }}</p>
                    </div>
                </div>

                <div>
                    <div style="border-top: 1px dashed #e2e8f0; padding-top: 12px; margin-bottom: 15px; display: flex; justify-content: space-between; font-size: 12px; color: #64748b;">
                        <span>⏱️ <strong>Respuesta:</strong> {{ $tramite->tiempo_estimado }}</span>
                        <span style="color: {{ $tramite->costo == 'Gratuito' ? '#16a34a' : '#475569' }}; font-weight: bold;">
                            💰 {{ $tramite->costo }}
                        </span>
                    </div>

                    <a href="{{ $tramite->url }}" style="display: block; text-align: center; background-color: var(--azul-uady); color: white; padding: 10px; border-radius: 6px; text-decoration: none; font-size: 13px; font-weight: bold; transition: 0.3s;" onmouseover="this.style.backgroundColor='var(--dorado-uady)'" onmouseout="this.style.backgroundColor='var(--azul-uady)'">
                        Iniciar Trámite →
                    </a>
                </div>

            </div>
        @empty
            <div style="grid-column: 1 / -1; text-align: center; padding: 40px; color: #64748b; background: white; border: 1px dashed #cbd5e1; border-radius: 10px;">
                <p style="margin: 0;">No hay trámites disponibles o registrados en este momento.</p>
            </div>
        @endforelse
    </div>
@endsection