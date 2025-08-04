<?php /* index.php - Página principal ABZCAR, inspirada en la web de referencia */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABZCAR - Taller Mecánico Express en Chihuahua</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', Arial, sans-serif; }
        .topbar-abz { background: #444c56; color: #fff; font-size: 1.25rem; padding: 0.7rem 0; border-bottom: 2px solid #ff4d1c; }
        .topbar-abz .container { display: flex; flex-wrap: wrap; align-items: center; gap: 2.5rem; }
        .topbar-abz span, .topbar-abz i { font-size: 1.25em; }
        .topbar-abz .bi { color: #ff4d1c; font-size: 1.5em; vertical-align: middle; margin-right: 0.3em; }
        .topbar-abz .contacto-strong { font-weight: bold; letter-spacing: 0.5px; }
        .navbar-abz { background: #23272b; }
        .navbar-abz .navbar-brand img { height: 55px; margin-right: 10px; }
        .navbar-abz .nav-link { color: #fff !important; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; position: relative; transition: color 0.2s; }
        .navbar-abz .nav-link::after { content: ''; display: block; width: 0; height: 3px; background: #ff4d1c; border-radius: 2px; position: absolute; left: 0; bottom: -2px; transition: width 0.3s cubic-bezier(.4,0,.2,1); }
        .navbar-abz .nav-link:hover, .navbar-abz .nav-link.active { color: #ff4d1c !important; }
        .navbar-abz .nav-link:hover::after, .navbar-abz .nav-link.active::after { width: 100%; }
        .hero-section { background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1486006920555-c77dcf18193c?auto=format&fit=crop&w=1920&q=80'); background-size: cover; background-position: center; color: white; padding: 120px 0; text-align: center; }
        .hero-section h1 { font-size: 3.5rem; font-weight: 700; margin-bottom: 1rem; }
        .hero-section .subtitle { font-size: 1.5rem; margin-bottom: 2rem; }
        .hero-section .since { font-size: 1.2rem; color: #ff4d1c; font-weight: 600; }
        .service-card { background: white; border-radius: 8px; padding: 1.5rem; text-align: center; box-shadow: 0 4px 16px rgba(0,0,0,0.1); transition: transform 0.3s; margin-bottom: 2rem; }
        .service-card:hover { transform: translateY(-5px); }
        .service-card img { width: 80px; height: 80px; object-fit: cover; border-radius: 50%; margin-bottom: 1rem; }
        .service-card h5 { color: #23272b; margin-bottom: 0.5rem; }
        .service-card p { color: #666; font-size: 0.9rem; }
        .history-section { background: #f8f9fa; padding: 80px 0; }
        .history-section h2 { color: #23272b; margin-bottom: 2rem; }
        .history-section .subtitle { color: #ff4d1c; font-weight: 600; margin-bottom: 1rem; }
        .footer-abz { background: #23272b; color: #fff; border-top: 4px solid #ff4d1c; padding: 2.5rem 0 1.2rem 0; }
        .footer-abz a { color: #fff; text-decoration: none; }
        .footer-abz a:hover { color: #ff4d1c; }
        .footer-abz .footer-bottom { border-top: 1px solid #444c56; margin-top: 2rem; padding-top: 1rem; text-align: center; color: #bbb; font-size: 0.97rem; }
        .btn-primary-abz { background: #ff4d1c; border: none; padding: 12px 30px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; }
        .btn-primary-abz:hover { background: #e6441a; }
        .logos-section { background: white; padding: 60px 0; border-top: 1px solid #eee; border-bottom: 1px solid #eee; }
        .logo-item { text-align: center; padding: 1rem; filter: grayscale(100%); transition: filter 0.3s; }
        .logo-item:hover { filter: grayscale(0%); }
        .logo-item img { max-height: 60px; max-width: 120px; }
        .stats-section { background: linear-gradient(45deg, #23272b, #444c56); color: white; padding: 80px 0; }
        .stat-item { text-align: center; margin-bottom: 2rem; }
        .stat-number { font-size: 3rem; font-weight: 700; color: #ff4d1c; margin-bottom: 0.5rem; }
        .stat-label { font-size: 1.1rem; font-weight: 500; }
        .gallery-section { padding: 80px 0; background: #f8f9fa; }
        .gallery-item { margin-bottom: 2rem; }
        .gallery-item img { width: 100%; height: 250px; object-fit: cover; border-radius: 8px; box-shadow: 0 4px 16px rgba(0,0,0,0.1); transition: transform 0.3s; }
        .gallery-item:hover img { transform: scale(1.05); }
        .team-section { padding: 80px 0; }
        .team-card { background: white; border-radius: 8px; padding: 2rem; text-align: center; box-shadow: 0 4px 16px rgba(0,0,0,0.1); margin-bottom: 2rem; }
        .team-card img { width: 120px; height: 120px; object-fit: cover; border-radius: 50%; margin-bottom: 1rem; }
        .blog-section { padding: 80px 0; background: #f8f9fa; }
        .blog-card { background: white; border-radius: 8px; padding: 1.5rem; box-shadow: 0 4px 16px rgba(0,0,0,0.1); margin-bottom: 2rem; }
        .blog-card img { width: 100%; height: 200px; object-fit: cover; border-radius: 8px; margin-bottom: 1rem; }
        .blog-date { color: #ff4d1c; font-size: 0.9rem; font-weight: 600; }
        .faq-section { padding: 80px 0; background: #f8f9fa; }
        .faq-item { background: white; border-radius: 8px; padding: 1.5rem; box-shadow: 0 4px 16px rgba(0,0,0,0.1); margin-bottom: 1rem; }
        .faq-question { color: #23272b; font-weight: 600; margin-bottom: 0.5rem; font-size: 1.1rem; }
        .faq-answer { color: #666; line-height: 1.6; }
        .faq-icon { color: #ff4d1c; font-size: 1.5rem; margin-right: 1rem; }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <!-- Barra superior de contacto -->
    <div class="topbar-abz">
        <div class="container justify-content-between">
            <div>
                <span class="me-4 contacto-strong"><i class="bi bi-truck"></i> Grúas Chih: 415-0550</span>
                <span class="me-4 contacto-strong"><i class="bi bi-truck"></i> Grúas Juárez: 656-5580808 / 656-100-25-00</span>
                <span class="me-4 contacto-strong"><i class="bi bi-telephone"></i> 614 416-7138</span>
                <span class="contacto-strong"><i class="bi bi-clock"></i> Lun-Vie 8:30-18:00 | Sáb 8:30-14:00</span>
            </div>
        </div>
    </div>
    <!-- Navbar principal -->
    <nav class="navbar navbar-expand-lg navbar-abz shadow-sm">
      <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
          <img src="assets/images/logo.png" alt="ABZCAR">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link active" href="index.php">Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="servicios.php">Servicios</a></li>
            <li class="nav-item"><a class="nav-link" href="flotillas.php">Flotillas</a></li>
            <li class="nav-item"><a class="nav-link" href="refaccionaria.php">Refaccionaria</a></li>
            <li class="nav-item"><a class="nav-link" href="seminuevos.php">Seminuevos</a></li>
            <li class="nav-item"><a class="nav-link" href="gruas.php">Grúas</a></li>
            <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Hero Section -->
    <section class="hero-section">
      <div class="container">
        <h1>ABECEDARIO DEL AUTOMÓVIL</h1>
        <div class="subtitle">Tu taller de confianza en Chihuahua</div>
        <div class="since">DESDE 1990</div>
        <a href="servicios.php" class="btn btn-primary-abz btn-lg mt-4">Conoce nuestros servicios</a>
      </div>
    </section>
    <!-- Banner de Logos -->
    <section class="logos-section">
      <div class="container">
        <h3 class="text-center mb-5">Nuestros Aliados Comerciales</h3>
        <div class="row align-items-center">
          <div class="col-md-2 col-4">
            <div class="logo-item">
              <img src="https://via.placeholder.com/120x60/ff4d1c/ffffff?text=AXA" alt="AXA">
            </div>
          </div>
          <div class="col-md-2 col-4">
            <div class="logo-item">
              <img src="https://via.placeholder.com/120x60/0066cc/ffffff?text=Club+Asistencia" alt="Club de Asistencia">
            </div>
          </div>
          <div class="col-md-2 col-4">
            <div class="logo-item">
              <img src="https://via.placeholder.com/120x60/00aa00/ffffff?text=Vial+Assistance" alt="Vial Assistance">
            </div>
          </div>
          <div class="col-md-2 col-4">
            <div class="logo-item">
              <img src="https://via.placeholder.com/120x60/ff6600/ffffff?text=México+Asistencia" alt="México Asistencia">
            </div>
          </div>
          <div class="col-md-2 col-4">
            <div class="logo-item">
              <img src="https://via.placeholder.com/120x60/cc0000/ffffff?text=AMA" alt="Asociación Mexicana Automovilística">
            </div>
          </div>
          <div class="col-md-2 col-4">
            <div class="logo-item">
              <img src="https://via.placeholder.com/120x60/333333/ffffff?text=Certificación" alt="Certificación">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Estadísticas -->
    <section class="stats-section">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="stat-item">
              <div class="stat-number">30+</div>
              <div class="stat-label">Años de Experiencia</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="stat-item">
              <div class="stat-number">50,000+</div>
              <div class="stat-label">Vehículos Atendidos</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="stat-item">
              <div class="stat-number">15</div>
              <div class="stat-label">Grúas en Flotilla</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="stat-item">
              <div class="stat-number">24/7</div>
              <div class="stat-label">Servicio Disponible</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Nuestra Historia -->
    <section class="history-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <div class="subtitle">Nuestra historia</div>
            <h2>Conoce nuestros inicios y lo que ofrecemos</h2>
            <p class="lead">Somos una empresa 100% chihuahuense que ofrece un servicio integral automotriz, iniciando operaciones en el año de 1990 en las instalaciones ubicadas en la calle Décima No. 3410 Col. Santa Rosa C.P. 31050 en Chihuahua, Chihuahua.</p>
          </div>
          <div class="col-lg-7">
            <div class="row">
              <div class="col-md-6">
                <div class="service-card">
                  <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?auto=format&fit=crop&w=200&q=80" alt="Cambio de aceite">
                  <h5>Cambio de aceite</h5>
                  <p>Protege a tu automóvil con el cambio de aceite.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="service-card">
                  <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?auto=format&fit=crop&w=200&q=80" alt="Aire acondicionado">
                  <h5>Aire acondicionado</h5>
                  <p>Cambio de filtros de polen, recarga de gas, revisión de fugas en el sistema.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="service-card">
                  <img src="https://images.unsplash.com/photo-1486006920555-c77dcf18193c?auto=format&fit=crop&w=200&q=80" alt="Afinación">
                  <h5>Afinación</h5>
                  <p>La Afinación se recomienda cada 6 meses o 10,000 kilómetros.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="service-card">
                  <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?auto=format&fit=crop&w=200&q=80" alt="Alineación y balanceo">
                  <h5>Alineación y balanceo</h5>
                  <p>Proceso necesario para mantener la estabilidad en conducción de tu vehículo.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Galería de Trabajos -->
    <section class="gallery-section">
      <div class="container">
        <h2 class="text-center mb-5">Trabajos Realizados</h2>
        <div class="row">
          <div class="col-md-4">
            <div class="gallery-item">
              <img src="https://images.unsplash.com/photo-1502877338535-766e1452684a?auto=format&fit=crop&w=400&q=80" alt="Restauración de motor">
              <h5 class="mt-3">Restauración Completa de Motor</h5>
              <p>Mustang 1967 - Reparación integral</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="gallery-item">
              <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=400&q=80" alt="Servicio de grúa">
              <h5 class="mt-3">Servicio de Grúa Empresarial</h5>
              <p>Traslado de flotilla de 10 vehículos</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="gallery-item">
              <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?auto=format&fit=crop&w=400&q=80" alt="Diagnóstico computarizado">
              <h5 class="mt-3">Diagnóstico Computarizado</h5>
              <p>Análisis completo de sistemas</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Preguntas Frecuentes -->
    <section class="faq-section">
      <div class="container">
        <h2 class="text-center mb-5">Preguntas Frecuentes</h2>
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="faq-item">
              <div class="d-flex align-items-start">
                <i class="bi bi-question-circle faq-icon"></i>
                <div>
                  <div class="faq-question">¿Ofrecen servicio a domicilio?</div>
                  <div class="faq-answer">Sí, contamos con servicio de grúa y mecánica a domicilio en la ciudad de Chihuahua y alrededores. Nuestras grúas están disponibles 24/7 para emergencias.</div>
                </div>
              </div>
            </div>
            <div class="faq-item">
              <div class="d-flex align-items-start">
                <i class="bi bi-question-circle faq-icon"></i>
                <div>
                  <div class="faq-question">¿Qué formas de pago aceptan?</div>
                  <div class="faq-answer">Aceptamos efectivo, transferencia bancaria, tarjetas de crédito y débito. También contamos con facilidades de pago para servicios empresariales.</div>
                </div>
              </div>
            </div>
            <div class="faq-item">
              <div class="d-flex align-items-start">
                <i class="bi bi-question-circle faq-icon"></i>
                <div>
                  <div class="faq-question">¿Tienen garantía los servicios?</div>
                  <div class="faq-answer">Sí, todos nuestros trabajos tienen garantía por escrito. La garantía varía según el servicio realizado, desde 3 meses hasta 1 año.</div>
                </div>
              </div>
            </div>
            <div class="faq-item">
              <div class="d-flex align-items-start">
                <i class="bi bi-question-circle faq-icon"></i>
                <div>
                  <div class="faq-question">¿Cuánto tiempo tardan en llegar las grúas?</div>
                  <div class="faq-answer">En la ciudad de Chihuahua, nuestras grúas llegan en promedio de 15-30 minutos. En carretera, el tiempo depende de la ubicación exacta.</div>
                </div>
              </div>
            </div>
            <div class="faq-item">
              <div class="d-flex align-items-start">
                <i class="bi bi-question-circle faq-icon"></i>
                <div>
                  <div class="faq-question">¿Manejan todas las marcas de vehículos?</div>
                  <div class="faq-answer">Sí, atendemos todas las marcas y modelos de vehículos, desde compactos hasta camiones ligeros y tractocamiones.</div>
                </div>
              </div>
            </div>
            <div class="faq-item">
              <div class="d-flex align-items-start">
                <i class="bi bi-question-circle faq-icon"></i>
                <div>
                  <div class="faq-question">¿Ofrecen servicio para flotillas empresariales?</div>
                  <div class="faq-answer">Sí, contamos con servicio especializado para flotillas empresariales, incluyendo mantenimiento preventivo, sistema de control y seguimiento de gastos.</div>
                </div>
              </div>
            </div>
            <div class="text-center mt-4">
              <a href="contacto.php" class="btn btn-primary-abz">¿Tienes otra pregunta? Contáctanos</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Call to Action -->
    <section class="bg-dark text-white py-5">
      <div class="container text-center">
        <h2 class="mb-3">DALE A TU AUTOMÓVIL LOS CUIDADOS NECESARIOS</h2>
        <p class="lead mb-4">Confía en más de 30 años de experiencia en el sector automotriz</p>
        <a href="contacto.php" class="btn btn-primary-abz">Contáctanos ahora</a>
      </div>
    </section>
    <!-- Footer -->
    <footer class="footer-abz">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-3">
            <h5>ABZCAR</h5>
            <p>Tu taller de confianza para servicios de mecánica automotriz y grúas.</p>
          </div>
          <div class="col-md-4 mb-3">
            <h6>Contacto</h6>
            <p>📱 415-0550 | 656-5580808 | 614 416-7138</p>
            <p>📧 info@abzcar.com</p>
            <p>📍 Calle Décima No. 3410 Col. Santa Rosa, Chihuahua</p>
          </div>
          <div class="col-md-4 mb-3">
            <h6>Enlaces</h6>
            <p><a href="index.php">Inicio</a></p>
            <p><a href="servicios.php">Servicios</a></p>
            <p><a href="flotillas.php">Flotillas</a></p>
            <p><a href="refaccionaria.php">Refaccionaria</a></p>
            <p><a href="seminuevos.php">Seminuevos</a></p>
            <p><a href="gruas.php">Grúas</a></p>
            <p><a href="contacto.php">Contacto</a></p>
          </div>
        </div>
        <div class="footer-bottom">
          Copyright &copy; <?php echo date('Y'); ?> ABZCAR | Todos los derechos reservados.
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 