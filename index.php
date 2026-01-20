<!DOCTYPE html>
<html lang="es">

<head>

    <head>
        <meta charset="UTF-8">

        <!-- Viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- SEO Title -->
        <title>Despostes App | Software para Carnicerías y Cálculo de Rendimiento Cárnico</title>

        <!-- Meta Description -->
        <meta name="description"
            content="Despostes App es la mejor aplicación para carnicerías. Calcula rendimientos de desposte, controla costos, gestiona precios y maximiza tus ganancias en carne bovina, porcina, pollo y pescado.">

        <!-- Keywords (no críticas, pero ayudan) -->
        <meta name="keywords"
            content="desposte, carnicería, rendimiento cárnico, cálculo de cortes, app para carnicerías, costos de carne, desposte bovino, desposte porcino">

        <!-- Author -->
        <meta name="author" content="Despostes App">

        <!-- Canonical -->
        <link rel="canonical" href="https://iseller-tiendas.com/">

        <!-- Open Graph (Facebook, WhatsApp) -->
        <meta property="og:title" content="Despostes App | Control total del desposte y rentabilidad">
        <meta property="og:description"
            content="Optimiza tu carnicería con cálculos precisos de desposte, control de precios y análisis de ganancias en tiempo real.">
        <meta property="og:image" content="https://iseller-tiendas.com/src/img/banner.webp">
        <meta property="og:url" content="https://iseller-tiendas.com/">
        <meta property="og:type" content="website">
        <meta property="og:locale" content="es_ES">

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Despostes App | Software para Carnicerías">
        <meta name="twitter:description"
            content="Calcula rendimientos, controla costos y maximiza ganancias en tu carnicería.">
        <meta name="twitter:image" content="https://iseller-tiendas.com/src/img/banner.webp">

        <!-- Favicon -->
        <link rel="icon" href="src/img/favicon.ico" type="image/x-icon">
        <link rel="preload" as="image" href="src/img/banner.webp">
        <!-- CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-..." crossorigin="anonymous">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Schema.org -->

        <script type="application/ld+json">
                {
                "@context": "https://schema.org",
                "@type": "SoftwareApplication",
                "name": "Despostes App",
                "applicationCategory": "BusinessApplication",
                "operatingSystem": "Android",
                "description": "Aplicación para carnicerías que permite calcular rendimientos de desposte, gestionar precios y maximizar ganancias.",
                "offers": {
                    "@type": "Offer",
                    "price": "0",
                    "priceCurrency": "USD"
                }
                }
        </script>

        <style>
            :root {
                --primary-color: #dc3545;
                /* Rojo de tu app */
                --secondary-color: #f8f9fa;
                /* Gris claro */
                --dark-color: #343a40;
                /* Gris oscuro */
            }

            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                line-height: 1.6;
                color: var(--dark-color);
            }

            .navbar-brand img {
                height: 40px;
                margin-right: 10px;
            }

            .hero-section {
                background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)),
                    url('src/img/banner.webp') no-repeat center/cover;
                color: white;
                padding: 100px 0;
                text-align: center;
            }

            .hero-section h1 {
                font-size: 3.5rem;
                margin-bottom: 20px;
                font-weight: 700;
            }

            .hero-section p {
                font-size: 1.25rem;
                margin-bottom: 40px;
            }

            .btn-primary-app {
                background-color: var(--primary-color);
                border-color: var(--primary-color);
                padding: 12px 30px;
                font-size: 1.1rem;
                border-radius: 50px;
                transition: all 0.3s ease;
            }

            .btn-primary-app:hover {
                background-color: #c82333;
                border-color: #c82333;
                transform: translateY(-2px);
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }

            .feature-icon {
                font-size: 3rem;
                color: var(--primary-color);
                margin-bottom: 15px;
            }

            .feature-card {
                background: white;
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
                text-align: center;
                height: 100%;
                transition: transform 0.3s ease;
            }

            .feature-card:hover {
                transform: translateY(-5px);
            }

            .section-title {
                text-align: center;
                margin-bottom: 60px;
                font-size: 2.5rem;
                font-weight: 600;
                color: var(--dark-color);
            }

            .section-title span {
                color: var(--primary-color);
            }

            .testimonial-carousel .card {
                border: none;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
                padding: 30px;
                text-align: center;
            }

            .testimonial-carousel .card-img-top {
                width: 80px;
                height: 80px;
                border-radius: 50%;
                object-fit: cover;
                margin: 0 auto 15px;
            }

            .download-section {
                background-color: var(--primary-color);
                color: white;
                padding: 80px 0;
                text-align: center;
            }

            .download-section h2 {
                font-size: 3rem;
                margin-bottom: 30px;
            }

            .download-buttons img {
                height: 60px;
                margin: 0 15px;
                transition: transform 0.3s ease;
            }

            .download-buttons img:hover {
                transform: translateY(-5px);
            }

            footer {
                background-color: var(--dark-color);
                color: white;
                padding: 40px 0;
                text-align: center;
                font-size: 0.9rem;
            }

            .screenshot-gallery img {
                border-radius: 8px;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease;
            }

            .screenshot-gallery img:hover {
                transform: scale(1.03);
            }

            .text-white {
                color: white !important;
            }

            #pricing .card {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            #pricing .card:hover {
                transform: translateY(-8px);
                box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
            }

            #pricing ul li i {
                font-size: 1.2rem;
            }
.shorts-section {
    margin-top: 40px;
  padding: 40px 20px;
  color: #fff;
}

.shorts-section h2 {
  text-align: center;
  margin-bottom: 20px;
}

.shorts-slider {
  position: relative;
  overflow: hidden;
  max-width: 1200px;
  margin: auto;
}

.shorts-track {
  display: flex;
  transition: transform 0.4s ease;
}

.short {
  flex: 0 0 25%;
  padding: 10px;
}

.short iframe {
  width: 100%;
  aspect-ratio: 9 / 16;
  border-radius: 14px;
  border: none;
}

/* Botones */
.nav {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(0,0,0,.6);
  border: none;
  color: #fff;
  font-size: 26px;
  padding: 8px 12px;
  cursor: pointer;
  z-index: 5;
  border-radius: 50%;
}

.prev { left: 5px; }
.next { right: 5px; }

/* 📱 Mobile: solo 1 visible */
@media (max-width: 768px) {
  .short { flex: 0 0 100%; }
}

                    </style>
    </head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-3 sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="src/img/logo.png" alt="Logo Despostes App"> <!-- Placeholder para el logo -->
                <span class="fw-bold fs-4" style="color: var(--primary-color);">Despostes App</span>
            </a>
            <button class="navbar-toggler" aria-label="Abrir menú de navegación" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#hero">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features" title="Funciones de Despostes App">Funciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#screenshots" title="Vistazo de Despostes App">Vistazo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#download" title="Descargar Despostes App">Descargar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing" title="Precios de Despostes App">Precios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact" title="Contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="hero-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h1>Optimiza tu Carnicería con <span>Despostes App</span></h1>
                    <p class="lead">La herramienta definitiva para calcular rendimientos, controlar costos y maximizar
                        las ganancias de tus productos cárnicos.</p>
                    <a href="desposte_app.apk" class="btn btn-primary-app btn-lg">Descárgala Ahora</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-5 py-md-5 bg-light">
        <div class="container">
            <h2 class="section-title">Funciones <span>Clave para Carnicerías</span></h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card">
                        <i class="fas fa-calculator feature-icon"></i>
                        <h3>Calculadora de Desposte Profesional</h3>
                        <p>Ingresa el peso en canal de un animal y obtén una estimación precisa de los kilogramos de
                            cada corte: carne, chuleta, lagarto, costilla, hueso y desperdicio.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card">
                        <i class="fas fa-chart-line feature-icon"></i>
                        <h3>Rendimiento Real y Ganancias</h3>
                        <p>Calcula la ganancia neta de un animal o cargamento. Agrega los precios de venta de cada
                            producto para ver el valor total y el beneficio real.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card">
                        <i class="fas fa-edit feature-icon"></i>
                        <h3>Gestión de Precios Flexible</h3>
                        <p>Actualiza fácilmente los precios de venta de tus productos (filete, entero, etc.) por tipo de
                            animal, adaptándote a las fluctuaciones del mercado.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card">
                        <i class="fas fa-apple-alt feature-icon"></i>
                        <h3>Múltiples Tipos de Animales</h3>
                        <p>Soporte para diferentes tipos de animales como Bovino, Porcino, Pollo y Pescado,
                            permitiéndote gestionar un inventario variado.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card">
                        <i class="fas fa-percentage feature-icon"></i>
                        <h3>Configuración Personalizada de Cortes</h3>
                        <p>Define y ajusta los porcentajes de rendimiento para cada corte (lomo, chuleta, costilla,
                            etc.) según tus propias necesidades y estándares de desposte.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card">
                        <i class="fas fa-mobile-alt feature-icon"></i>
                        <h3>Interfaz Intuitiva y Móvil</h3>
                        <p>Diseño moderno y fácil de usar, optimizado para dispositivos móviles, para que puedas
                            gestionar tu carnicería desde cualquier lugar.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How it works / Screenshots Section -->
    <section id="screenshots" class="py-5 py-md-5">
        <div class="container">
            <h2 class="section-title">Un <span>Vistazo</span> a la App</h2>
            <p class="text-center mb-5 lead">Descubre lo fácil que es usar Despostes App con estas capturas de pantalla.
            </p>
            <div class="row g-4 screenshot-gallery">
                <div class="col-md-4 col-lg-3">
                    <img src="src/img/cap-1.webp" alt="Captura de pantalla 1"
                        alt="Pantalla principal de Despostes App para cálculo de desposte" loading="lazy"
                        class="img-fluid">
                </div>
                <div class="col-md-4 col-lg-3">
                    <img src="src/img/cap-2.webp" alt="Captura de pantalla 2"
                        alt="Pantalla principal de Despostes App para cálculo de desposte" loading="lazy"
                        class="img-fluid">
                </div>
                <div class="col-md-4 col-lg-3">
                    <img src="src/img/cap-3.webp" alt="Captura de pantalla 3"
                        alt="Pantalla principal de Despostes App para cálculo de desposte" loading="lazy"
                        class="img-fluid">
                </div>
                <div class="col-md-4 col-lg-3">
                    <img src="src/img/cap-4.webp" alt="Captura de pantalla 4"
                        alt="Pantalla principal de Despostes App para cálculo de desposte" loading="lazy"
                        class="img-fluid">
                </div>

            </div>

            <section class="shorts-section">
                <h2>Tutoriales rápidos</h2>

                <div class="shorts-slider">
                    <button class="nav prev" style="width: 50px; place-content: center;" onclick="moveShorts(-1)">❮</button>

                    <div class="shorts-track" id="shortsTrack">
                    <div class="short">
                        <iframe src="https://www.youtube.com/embed/hB9CljEoRJ4"
                        allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div class="short">
                        <iframe src="https://www.youtube.com/embed/cFMVemUwOP0"
                        allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div class="short">
                        <iframe src="https://www.youtube.com/embed/vBNnyNbMxvY"
                        allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div class="short">
                        <iframe src="https://www.youtube.com/embed/6ZLjmfutI7A"
                        allowfullscreen loading="lazy"></iframe>
                    </div>
                    </div>

                    <button class="nav next" style="width: 50px; place-content: center;" onclick="moveShorts(1)">❯</button>
                </div>
                </section>

                

        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="download-section">
        <div class="container">
            <h2 class="mb-4">¡Descarga Despostes App Hoy Mismo!</h2>
            <p class="lead mb-5">Disponible para Android. Potencia tu negocio y toma decisiones más inteligentes.</p>
            <div class="download-buttons">
                <a href="desposte_app.apk"  target="_blank" class="d-inline-block mx-3 text-white" aria-label="Descargar Despostes App">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg"
                        alt="Descargar">
                </a>
                <!-- Si en el futuro está disponible en App Store, puedes añadirlo aquí -->
                <!--
                <a href="#" target="_blank" class="d-inline-block mx-3">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Download_on_the_App_Store_Badge.svg" alt="Descargar en App Store">
                </a>
                -->
            </div>
        </div>
    </section>


    <!-- Pricing Section -->
    <section id="pricing" class="py-5 py-md-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center mb-5">Nuestro Plan Anual</h2>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="card shadow-lg p-4 text-center" style="border-radius: 20px;">
                        <h3 class="mb-3 fw-bold">Plan Anual</h3>
                        <p class="display-3 fw-bold mb-3" style="color: var(--primary-color);">
                            $3 <small class="fs-6">/ año</small>
                        </p>
                        <p class="mb-4 text-muted">Incluye <b>versión de prueba</b>, soporte prioritario y acceso a
                            nuevas
                            funcionalidades.</p>
                        <ul class="list-unstyled text-start mb-4">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Versión de prueba
                                disponible</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Soporte prioritario
                            </li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Acceso a nuevas
                                funcionalidades</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Actualizaciones
                                automáticas</li>
                        </ul>
                        <a href="desposte_app.apk" class="btn btn-primary-app btn-lg w-100">Comenzar Ahora</a>
                        <p class="mt-3 text-muted"><small>¡Prueba <b>gratis</b> disponible antes de pagar!</small></p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Contact Section -->
    <section id="contact" class="py-5 py-md-5 bg-light">
        <div class="container">
            <h2 class="section-title">Contáctanos</h2>
            <p class="text-center lead mb-5">¿Tienes preguntas o sugerencias? ¡Nos encantaría
                escucharte!</p>
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <form id="contactForm" novalidate>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>


                        <!-- Honeypot (campo trampa para bots) -->
                        <div style="position:absolute; left:-9999px; top:-9999px;">
                            <label for="company">Empresa</label>
                            <input type="text" name="company" id="company" tabindex="-1" autocomplete="off">
                        </div>

                        <!-- Timestamp -->
                        <input type="hidden" name="ts" value="<?php echo time(); ?>">


                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary-app btn-lg">Enviar
                                Mensaje</button>
                        </div>
                    
                        

                        <div id="formFeedback" class="mt-3 text-center"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>&copy; 2024 Despostes App. Todos los derechos reservados.</p>
            <p>
                📧 <a href="mailto:contacto@tudominio.com" class="text-white">@iseller-tiendas.com</a> |
                📱 <a href="https://wa.me/1234567890" target="_blank" class="text-white">WhatsApp</a>
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="src/js/main.js"></script>

    
<script>
let index = 0;

function moveShorts(dir) {
  const track = document.getElementById('shortsTrack');
  const items = track.children.length;
  const visible = window.innerWidth <= 768 ? 1 : 4;

  index += dir;

  if (index < 0) index = 0;
  if (index > items - visible) index = items - visible;

  const percent = (100 / visible) * index;
  track.style.transform = `translateX(-${percent}%)`;
}
</script>

</body>

</html>