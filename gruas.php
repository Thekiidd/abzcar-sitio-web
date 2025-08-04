<?php /* gruas.php - Página de grúas ABZCAR, inspirada en la web de referencia */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grúas | ABZCAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', Arial, sans-serif; }
        .topbar-abz { background: #444c56; color: #fff; font-size: 0.97rem; padding: 0.3rem 0; border-bottom: 2px solid #ff4d1c; }
        .topbar-abz .container { display: flex; flex-wrap: wrap; align-items: center; gap: 2rem; }
        .navbar-abz { background: #23272b; }
        .navbar-abz .navbar-brand img { height: 55px; margin-right: 10px; }
        .navbar-abz .nav-link { color: #fff !important; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; position: relative; transition: color 0.2s; }
        .navbar-abz .nav-link::after { content: ''; display: block; width: 0; height: 3px; background: #ff4d1c; border-radius: 2px; position: absolute; left: 0; bottom: -2px; transition: width 0.3s cubic-bezier(.4,0,.2,1); }
        .navbar-abz .nav-link:hover, .navbar-abz .nav-link.active { color: #ff4d1c !important; }
        .navbar-abz .nav-link:hover::after, .navbar-abz .nav-link.active::after { width: 100%; }
        .page-header { background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1503736334956-4c8f8e92946d?auto=format&fit=crop&w=1920&q=80'); background-size: cover; background-position: center; color: white; padding: 80px 0; text-align: center; }
        .content-section { padding: 60px 0; }
        .content-section h2 { color: #23272b; margin-bottom: 2rem; }
        .content-section .highlight { color: #ff4d1c; font-weight: 600; }
        .contact-card { background: white; border-radius: 8px; padding: 2rem; box-shadow: 0 4px 16px rgba(0,0,0,0.1); margin-bottom: 2rem; }
        .contact-card h5 { color: #ff4d1c; margin-bottom: 1rem; }
        .service-list { background: #f8f9fa; border-radius: 8px; padding: 2rem; margin: 2rem 0; }
        .service-list ul { list-style: none; padding: 0; }
        .service-list li { padding: 0.5rem 0; border-bottom: 1px solid #dee2e6; }
        .service-list li:last-child { border-bottom: none; }
        .service-list li:before { content: "✓"; color: #ff4d1c; font-weight: bold; margin-right: 10px; }
        .footer-abz { background: #23272b; color: #fff; border-top: 4px solid #ff4d1c; padding: 2.5rem 0 1.2rem 0; }
        .footer-abz a { color: #fff; text-decoration: none; }
        .footer-abz a:hover { color: #ff4d1c; }
        .footer-abz .footer-bottom { border-top: 1px solid #444c56; margin-top: 2rem; padding-top: 1rem; text-align: center; color: #bbb; font-size: 0.97rem; }
        .btn-primary-abz { background: #ff4d1c; border: none; padding: 12px 30px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; }
        .btn-primary-abz:hover { background: #e6441a; }
        .emergency-banner { background: linear-gradient(45deg, #ff4d1c, #e6441a); color: white; padding: 1rem; text-align: center; font-weight: 600; }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <!-- Barra superior de contacto -->
    <div class="topbar-abz">
        <div class="container justify-content-between">
            <div>
                <span class="me-3"><i class="bi bi-truck"></i> Grúas Chih: 415-0550</span>
                <span class="me-3"><i class="bi bi-truck"></i> Grúas Juárez: 656-5580808 / 656-100-25-00</span>
                <span class="me-3"><i class="bi bi-telephone"></i> 614 416-7138</span>
                <span><i class="bi bi-clock"></i> Lun-Vie 8:30-18:00 | Sáb 8:30-14:00</span>
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
            <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="servicios.php">Servicios</a></li>
            <li class="nav-item"><a class="nav-link" href="flotillas.php">Flotillas</a></li>
            <li class="nav-item"><a class="nav-link" href="refaccionaria.php">Refaccionaria</a></li>
            <li class="nav-item"><a class="nav-link" href="seminuevos.php">Seminuevos</a></li>
            <li class="nav-item"><a class="nav-link active" href="gruas.php">Grúas</a></li>
            <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Banner de emergencia -->
    <div class="emergency-banner">
      <i class="bi bi-exclamation-triangle-fill me-2"></i>
      SERVICIO 24/7 - 365 DÍAS DEL AÑO
    </div>
    <!-- Header de página -->
    <section class="page-header">
      <div class="container">
        <h1 class="display-4 fw-bold">Servicio de Grúas</h1>
        <p class="lead">Auxilio vial las 24 horas del día, los 365 días del año</p>
      </div>
    </section>
    <!-- Información de contacto -->
    <section class="content-section">
      <div class="container">
        <h2 class="text-center mb-5">Contáctanos</h2>
        <div class="row">
          <div class="col-md-6">
            <div class="contact-card">
              <h5><i class="bi bi-geo-alt-fill me-2"></i>Chihuahua</h5>
              <p><strong>Cabina:</strong> 614-415-0550</p>
              <p><strong>Celular:</strong> 614-266-48-87</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="contact-card">
              <h5><i class="bi bi-geo-alt-fill me-2"></i>Juárez</h5>
              <p><strong>Cabina:</strong> 656-558-0808</p>
              <p><strong>Celular:</strong> 656-100-25-00</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Servicios de grúas -->
    <section class="content-section bg-light">
      <div class="container">
        <h2 class="text-center mb-5">Servicios de Grúas</h2>
        <div class="row">
          <div class="col-lg-8">
            <div class="service-list">
              <ul>
                <li>Servicio 24/7</li>
                <li>Servicio de grúas de arrastre</li>
                <li>Servicio de grúas de plataforma</li>
                <li>Hospedaje de vehículos</li>
                <li>Maniobras especializadas</li>
                <li>Arrastré de tractocamiones, bicuernas, tricuernas y cuatricuernas</li>
                <li>Auxilio Vial: Cambio de llantas, suministro de gasolina, paso de corriente, servicio de taxi en carretera o local</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <img src="https://images.unsplash.com/photo-1503736334956-4c8f8e92946d?auto=format&fit=crop&w=600&q=80" class="img-fluid rounded shadow" alt="Servicio de grúas">
          </div>
        </div>
      </div>
    </section>
    <!-- Información adicional -->
    <section class="content-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h2>Nuestro Servicio de Grúas</h2>
            <p class="lead">En abecedario del automóvil y ABZ Car, contamos con nuestra propia flotilla de grúas, este servicio está disponible las <span class="highlight">24 horas del día los 365 días del año</span>, contamos con los <span class="highlight">precios más económicos del mercado y con el mejor trato al cliente</span>.</p>
            
            <p>Nuestra escuadrilla cuenta con la variedad de: Grúas de plataforma, de Wheel lift, pluma de arrastré y con un remolque tipo madrina con capacidad para 4 vehículos. Tenemos la capacidad de ofrecerle el mejor servicio de este ramo bajo los precios más bajos de la ciudad.</p>
            
            <p>En prueba está que prestamos atención a algunas de las aseguradoras más importantes del país, entre los cuales podemos mencionar a Clientes como asociación mexicana automovilística, club de asistencia, AXA Assistence, Vial Assistance, México Asistencia.</p>
            
            <p><span class="highlight">Brindamos servicio local y servicio foráneo a lo largo del país</span>.</p>
          </div>
          <div class="col-lg-4">
            <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=600&q=80" class="img-fluid rounded shadow" alt="Flotilla de grúas">
          </div>
        </div>
      </div>
    </section>
    <!-- Ventajas del servicio -->
    <section class="content-section bg-light">
      <div class="container">
        <h2 class="text-center mb-5">¿Por qué elegir nuestro servicio de grúas?</h2>
        <div class="row">
          <div class="col-md-4 text-center mb-4">
            <i class="bi bi-clock display-4 text-success mb-3"></i>
            <h5>Disponibilidad 24/7</h5>
            <p>Servicio disponible las 24 horas del día, los 365 días del año.</p>
          </div>
          <div class="col-md-4 text-center mb-4">
            <i class="bi bi-currency-dollar display-4 text-warning mb-3"></i>
            <h5>Precios Competitivos</h5>
            <p>Los precios más económicos del mercado con el mejor trato al cliente.</p>
          </div>
          <div class="col-md-4 text-center mb-4">
            <i class="bi bi-truck display-4 text-primary mb-3"></i>
            <h5>Flotilla Completa</h5>
            <p>Grúas de plataforma, wheel lift, pluma de arrastré y remolque madrina.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Call to Action -->
    <section class="bg-dark text-white py-5">
      <div class="container text-center">
        <h2 class="mb-3">¿Necesita servicio de grúa?</h2>
        <p class="lead mb-4">Llámenos inmediatamente - Servicio disponible 24/7</p>
        <div class="row justify-content-center">
          <div class="col-md-4">
            <a href="tel:6144150550" class="btn btn-primary-abz btn-lg w-100 mb-2">
              <i class="bi bi-telephone-fill me-2"></i>Chihuahua: 415-0550
            </a>
          </div>
          <div class="col-md-4">
            <a href="tel:6565580808" class="btn btn-primary-abz btn-lg w-100 mb-2">
              <i class="bi bi-telephone-fill me-2"></i>Juárez: 558-0808
            </a>
          </div>
        </div>
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