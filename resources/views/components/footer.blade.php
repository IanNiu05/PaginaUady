@props(['datos' => []])

<footer style="margin-top: auto; font-family: 'Inter', sans-serif;">
    
    <div style="background-color: var(--azul-uady); color: white; padding: 40px 50px;">
        
        <div style="max-width: 1300px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; align-items: center;">
            
            <div>
                @if(isset($datos) && count($datos) > 0)
                    @foreach($datos as $item)
                        <a href="{{ $item->tipo == 'enlace' ? $item->contenido : '#' }}" style="display: block; color: white; text-decoration: none; font-size: 13px; margin-bottom: 8px; transition: 0.3s;" onmouseover="this.style.color='var(--dorado-uady)'" onmouseout="this.style.color='white'">
                            {{ $item->titulo }} {{ $item->tipo == 'texto' ? ': ' . $item->contenido : '' }}
                        </a>
                    @endforeach
                @else
                    <a href="#" style="display: block; color: white; text-decoration: none; font-size: 13px; margin-bottom: 8px;">Protocolo de violencia de género</a>
                    <a href="#" style="display: block; color: white; text-decoration: none; font-size: 13px; margin-bottom: 8px;">Aviso Integral de Privacidad - Cámaras</a>
                    <a href="#" style="display: block; color: white; text-decoration: none; font-size: 13px; margin-bottom: 8px;">Catálogo de solicitudes y tiempos de atención</a>
                    <a href="#" style="display: block; color: white; text-decoration: none; font-size: 13px; margin-bottom: 8px;">Transparencia</a>
                    <a href="#" style="display: block; color: white; text-decoration: none; font-size: 13px; margin-bottom: 8px;">Bibliotecas</a>
                    <a href="#" style="display: block; color: white; text-decoration: none; font-size: 13px; margin-bottom: 8px;">Mapa de sitio</a>
                @endif
            </div>

            <div style="text-align: center; font-size: 13px;">
                <p style="margin: 0 0 10px 0;">Universidad Autónoma de Yucatán</p>
                <p style="margin: 0;">© Todos los Derechos Reservados, UADY {{ date('Y') }}</p>
            </div>

            <div style="text-align: right;">
                <p style="margin: 0 0 10px 0; font-size: 14px;">Síguenos en la UADY:</p>
                <div style="display: flex; gap: 15px; justify-content: flex-end; font-size: 18px; margin-bottom: 10px;">
                    <a href="#" style="color: white; text-decoration: none;">f</a>
                    <a href="#" style="color: white; text-decoration: none;">▶</a>
                    <a href="#" style="color: white; text-decoration: none;">📷</a>
                    <a href="#" style="color: white; text-decoration: none;">𝕏</a>
                    <a href="#" style="color: white; text-decoration: none;">in</a>
                </div>
                <p style="margin: 0; font-size: 11px; color: #cbd5e1;">Directorio de Redes Sociales Universitarias</p>
            </div>

        </div>

        <div style="max-width: 1300px; margin: 30px auto 0 auto; display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 20px; border-top: 1px solid rgba(255, 255, 255, 0.15); padding-top: 25px;">
            
            <div style="display: flex; align-items: center; gap: 10px;">
                <div style="width: 35px; height: 35px; background: #601826; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 18px;">C</div>
                <div>
                    <strong style="color: white; font-size: 15px; display: block; line-height: 1.1;">Contralores<br>Sociales</strong>
                    <span style="font-size: 9px; color: #cbd5e1; text-transform: uppercase;">Guardianes del gasto público</span>
                </div>
            </div>

            <div style="flex: 1; text-align: center; font-size: 12px; color: #cbd5e1; max-width: 800px; margin: 0 auto;">
                Esta página puede ser reproducida con fines no lucrativos, siempre y cuando no se mutile, se cite la fuente completa y su dirección electrónica, de otra forma requiere permiso previo por escrito de la institución.
            </div>
            
        </div>

    </div>
</footer>