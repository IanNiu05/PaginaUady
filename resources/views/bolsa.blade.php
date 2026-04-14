@extends('layouts.secundario')

@section('titulo', 'Bolsa de Trabajo - FCA UADY')

@section('contenido')
    <div style="margin-bottom: 30px;">
        <h2 style="color: var(--azul-uady); margin: 0; font-size: 24px;">Vacantes Disponibles</h2>
        <p style="color: #64748b; font-size: 14px;">Explora las oportunidades laborales generadas para la comunidad FCA.</p>
    </div>

    <div style="display: flex; flex-direction: column; gap: 20px;">
        @forelse($vacantes as $vacante)
            <div style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; transition: 0.3s;" onmouseover="this.style.borderColor='var(--dorado-uady)'" onmouseout="this.style.borderColor='#e2e8f0'">
                <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                    <div>
                        <h3 style="margin: 0; color: var(--azul-uady); font-size: 18px;">{{ $vacante->puesto }}</h3>
                        <p style="margin: 5px 0; color: var(--dorado-uady); font-weight: 600; font-size: 14px;">{{ $vacante->empresa }}</p>
                    </div>
                    <span style="background: #f1f5f9; color: #475569; padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: bold;">
                        ${{ number_format($vacante->salario, 0) }}
                    </span>
                </div>

                <div style="margin: 15px 0; font-size: 13px; color: #64748b; display: flex; gap: 15px;">
                    <span>📍 {{ $vacante->ubicacion }}</span>
                    <span>🕒 Publicado recientemente</span>
                </div>

                <p style="font-size: 14px; color: #555; line-height: 1.5; margin-bottom: 15px;">
                    {{ Str::limit($vacante->descripcion, 150) }}
                </p>

                <a href="#" style="display: inline-block; color: var(--azul-uady); font-weight: bold; font-size: 13px; text-decoration: none; border-bottom: 2px solid var(--dorado-uady); padding-bottom: 2px;">
                    Ver detalles de la vacante →
                </a>
            </div>
        @empty
            <div style="text-align: center; padding: 40px; color: #64748b;">
                <p>No hay vacantes disponibles en este momento.</p>
            </div>
        @endforelse
    </div>
@endsection