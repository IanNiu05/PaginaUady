@extends('layouts.secundario')

@section('titulo', 'Calendario Escolar - FCA UADY')

@section('contenido')
    <div style="margin-bottom: 30px;">
        <h2 style="color: var(--azul-uady); margin: 0; font-size: 24px;">Calendario Escolar y Fechas Importantes</h2>
        <p style="color: #64748b; font-size: 14px;">Consulta los periodos de exámenes, asuetos y eventos académicos de la FCA.</p>
    </div>

    <div style="background: white; border: 1px solid #e2e8f0; border-radius: 10px; padding: 25px; margin-bottom: 35px; box-shadow: 0 2px 5px rgba(0,0,0,0.02);">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <h3 style="margin: 0; color: var(--azul-uady); font-size: 18px; text-transform: capitalize;">
                Visualización Mensual: {{ \Carbon\Carbon::now()->translatedFormat('F Y') }}
            </h3>
            <span style="background: #f1f5f9; color: var(--azul-uady); padding: 5px 14px; border-radius: 20px; font-size: 12px; font-weight: bold; border: 1px solid #e2e8f0;">
                Hoy: {{ \Carbon\Carbon::now()->format('d/m/Y') }}
            </span>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(7, 1fr); gap: 5px; text-align: center; font-weight: bold; color: #475569; font-size: 13px; margin-bottom: 10px; border-bottom: 1px solid #e2e8f0; padding-bottom: 8px;">
            <div>Lu</div><div>Ma</div><div>Mi</div><div>Ju</div><div>Vi</div><div>Sá</div><div>Do</div>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(7, 1fr); gap: 8px; text-align: center;">
            @php
                $hoy = \Carbon\Carbon::now()->day;
                $mesActual = \Carbon\Carbon::now()->month;
                $añoActual = \Carbon\Carbon::now()->year;
                
                $primerDiaSemana = \Carbon\Carbon::now()->startOfMonth()->dayOfWeekIso; // 1 = Lunes, 7 = Domingo
                $totalDiasMes = \Carbon\Carbon::now()->daysInMonth;
            @endphp
        
            @for ($i = 1; $i < $primerDiaSemana; $i++)
                <div style="padding: 10px;"></div>
            @endfor
        
            @for ($dia = 1; $dia <= $totalDiasMes; $dia++)
            
                @php
                    $tieneEvento = $eventos->contains(function($evento) use ($dia, $mesActual, $añoActual) {
                        $fechaEv = \Carbon\Carbon::parse($evento->fecha);
                        return $fechaEv->day == $dia && $fechaEv->month == $mesActual && $fechaEv->year == $añoActual;
                    });
                    
                    $esHoy = ($dia == $hoy);
                @endphp
                
                <div style="padding: 10px 5px; border-radius: 6px; font-size: 13px; font-weight: 600; position: relative; transition: 0.2s;
                    @if($esHoy)
                        background: var(--azul-uady); color: white; box-shadow: 0 3px 6px rgba(27,54,93,0.3);
                    @elseif($tieneEvento)
                        background: #fef08a; color: #854d0e; border: 1px solid var(--dorado-uady);
                    @else
                        background: #f8fafc; color: #333;
                    @endif
                ">
                    {{ $dia }}
                    
                    @if($tieneEvento && !$esHoy)
                        <span style="position: absolute; bottom: 4px; left: 50%; transform: translateX(-50%); width: 4px; height: 4px; background: var(--dorado-uady); border-radius: 50%;"></span>
                    @endif
                </div>
            @endfor
        </div>
        
        <div style="display: flex; gap: 15px; font-size: 11px; margin-top: 15px; color: #64748b; justify-content: flex-end;">
            <div style="display: flex; align-items: center; gap: 5px;"><span style="width: 12px; height: 12px; background: var(--azul-uady); border-radius: 3px; display: inline-block;"></span> Día Actual</div>
            <div style="display: flex; align-items: center; gap: 5px;"><span style="width: 12px; height: 12px; background: #fef08a; border: 1px solid var(--dorado-uady); border-radius: 3px; display: inline-block;"></span> Fechas con Actividades</div>
        </div>
    </div>

    <div style="margin-bottom: 25px;">
        <h3 style="color: var(--azul-uady); font-size: 18px; border-bottom: 2px solid #e2e8f0; padding-bottom: 10px;">Desglose de Eventos</h3>
    </div>

    <div style="display: flex; flex-direction: column; gap: 20px;">
        @forelse($eventos as $evento)
            <div style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; display: flex; gap: 20px; align-items: center; transition: 0.3s; background: white;" onmouseover="this.style.borderColor='var(--dorado-uady)'; this.style.boxShadow='0 4px 10px rgba(0,0,0,0.02)';" onmouseout="this.style.borderColor='#e2e8f0'; this.style.boxShadow='none';">
                
                <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; background: var(--azul-uady); color: white; min-width: 75px; height: 75px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
                    <span style="font-size: 26px; font-weight: bold; line-height: 1;">
                        {{ \Carbon\Carbon::parse($evento->fecha)->format('d') }}
                    </span>
                    <span style="font-size: 11px; font-weight: bold; text-transform: uppercase; color: var(--dorado-uady); margin-top: 4px;">
                        {{ \Carbon\Carbon::parse($evento->fecha)->translatedFormat('M') }}
                    </span>
                </div>

                <div style="flex: 1;">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; gap: 10px; flex-wrap: wrap;">
                        <div>
                            <h3 style="margin: 0; color: var(--azul-uady); font-size: 17px;">{{ $evento->titulo }}</h3>
                            <p style="margin: 3px 0 8px 0; color: var(--dorado-uady); font-weight: 600; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;">
                                {{ $evento->tipo }}
                            </p>
                        </div>
                        <span style="background: #f1f5f9; color: #64748b; padding: 3px 10px; border-radius: 12px; font-size: 11px; font-weight: bold;">
                            {{ \Carbon\Carbon::parse($evento->fecha)->format('Y') }}
                        </span>
                    </div>

                    <div style="font-size: 13px; color: #64748b; display: flex; gap: 15px; margin-bottom: 8px;">
                        <span>📍 {{ $evento->modalidad ?? 'FCA UADY' }}</span>
                        <span>🕒 {{ $evento->hora ?? 'Todo el día' }}</span>
                    </div>

                    <p style="font-size: 13px; color: #555; line-height: 1.5; margin: 0;">
                        {{ Str::limit($evento->descripcion, 160) }}
                    </p>
                </div>

            </div>
        @empty
            <div style="text-align: center; padding: 40px; color: #64748b; background: white; border: 1px dashed #cbd5e1; border-radius: 10px;">
                <p style="margin: 0;">No hay fechas o eventos próximos registrados en este momento.</p>
            </div>
        @endforelse
    </div>
@endsection