@props(['banners' => []])

@if(count($banners) > 0)
<div class="hero-slider">
    <div class="hero-track">
        @foreach($banners as $banner)
            <div class="hero-slide">
                <img src="{{ asset($banner->imagen) }}" alt="{{ $banner->titulo }}">
                <div class="hero-overlay">
                    <h2>{!! nl2br(e($banner->titulo)) !!}</h2>
                    <p>{{ $banner->subtitulo }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@else
<div class="hero-slider">
    <div class="hero-slide">
        <img src="{{ asset('img/noticias/fachada.jpg') }}" alt="FCA">
        <div class="hero-overlay">
            <h2>Facultad de Contaduría y Administración</h2>
            <p>Cargando información...</p>
        </div>
    </div>
</div>
@endif