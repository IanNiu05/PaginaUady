@props(['banners' => null])

@php
    $carruselFijo = [
        ['imagen' => 'fca.jpg', 'texto' => 'Bienvenidos a la Facultad de Contaduría y Administración'],
        ['imagen' => 'lati.jpg', 'texto' => 'Primera Jornada LATI'],
        ['imagen' => 'anfeca.jpg', 'texto' => 'Estudiantes UADY obtienen primer lugar en Maratón Nacional de Conocimientos'],
        ['imagen' => 'vinculacion.jpg', 'texto' => 'FCA genera Vinculación Estratégica entre estudiantes UADY y empresarios']
    ];
@endphp

<div class="carousel-container">
    @foreach($carruselFijo as $index => $slide)
        <div class="carousel-slide {{ $index === 0 ? 'active' : '' }}">
            <div class="image-overlay"></div>
            
            <img src="{{ asset('img/carrusel/' . $slide['imagen']) }}" alt="Banner {{ $index + 1 }}">
            
            <div class="carousel-caption">
                <h2>{{ $slide['texto'] }}</h2>
            </div>
        </div>
    @endforeach

    <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
    <button class="next" onclick="changeSlide(1)">&#10095;</button>
</div>

<style>
    .carousel-container {
        position: relative;
        width: 100%;
        height: 550px; /* Altura ideal para la portada de inicio */
        overflow: hidden;
        background-color: #000000;
        font-family: 'Inter', sans-serif;
    }

    .carousel-slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        z-index: 1;
        transition: opacity 1s ease-in-out; 
    }

    .carousel-slide.active {
        opacity: 1;
        z-index: 2;
    }

    .carousel-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
       
        background: linear-gradient(to top, rgba(0, 0, 0, 0.85) 0%, rgba(27, 54, 93, 0.45) 100%);
        z-index: 3;
    }

    .carousel-caption {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 4;
        color: #ffffff;
        text-align: center;
        width: 85%;
        max-width: 950px;
        box-sizing: border-box;
    }

    .carousel-caption h2 {
        font-size: 38px;
        font-weight: 800;
        margin: 0;
        text-transform: uppercase;
        letter-spacing: 1px;
        line-height: 1.3;
        text-shadow: 2px 4px 15px rgba(0, 0, 0, 0.8);
    }

    .prev, .next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.15);
        color: #ffffff;
        padding: 10px;
        border: none;
        cursor: pointer;
        font-size: 24px;
        z-index: 10;
        border-radius: 50%;
        width: 55px;
        height: 55px;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .prev:hover, .next:hover {
        background: var(--dorado-uady, #cda043);
        color: #ffffff;
        transform: translateY(-50%) scale(1.08);
    }

    .prev { left: 25px; }
    .next { right: 25px; }

    @media (max-width: 768px) {
        .carousel-container { height: 350px; }
        .carousel-caption h2 { font-size: 22px; }
        .prev, .next { width: 40px; height: 40px; font-size: 18px; }
        .prev { left: 10px; }
        .next { right: 10px; }
    }
</style>

<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.carousel-slide');

    function showSlide(n) {
        slides[currentSlide].classList.remove('active');
        currentSlide = (n + slides.length) % slides.length;
        slides[currentSlide].classList.add('active');
    }

    function changeSlide(n) {
        showSlide(currentSlide + n);
    }

    setInterval(() => {
        changeSlide(1);
    }, 7000); 
</script>