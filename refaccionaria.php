<?php /* refaccionaria.php - Página de refaccionaria ABZCAR, inspirada en la web de referencia */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refaccionaria | ABZCAR</title>
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
        .page-header { background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?auto=format&fit=crop&w=1920&q=80'); background-size: cover; background-position: center; color: white; padding: 80px 0; text-align: center; }
        .content-section { padding: 60px 0; }
        .content-section h2 { color: #23272b; margin-bottom: 2rem; }
        .content-section .highlight { color: #ff4d1c; font-weight: 600; }
        .location-card { background: white; border-radius: 8px; padding: 2rem; box-shadow: 0 4px 16px rgba(0,0,0,0.1); margin-bottom: 2rem; }
        .location-card h5 { color: #ff4d1c; margin-bottom: 1rem; }
        .footer-abz { background: #23272b; color: #fff; border-top: 4px solid #ff4d1c; padding: 2.5rem 0 1.2rem 0; }
        .footer-abz a { color: #fff; text-decoration: none; }
        .footer-abz a:hover { color: #ff4d1c; }
        .footer-abz .footer-bottom { border-top: 1px solid #444c56; margin-top: 2rem; padding-top: 1rem; text-align: center; color: #bbb; font-size: 0.97rem; }
        .btn-primary-abz { background: #ff4d1c; border: none; padding: 12px 30px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; }
        .btn-primary-abz:hover { background: #e6441a; }
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
            <li class="nav-item"><a class="nav-link active" href="refaccionaria.php">Refaccionaria</a></li>
            <li class="nav-item"><a class="nav-link" href="seminuevos.php">Seminuevos</a></li>
            <li class="nav-item"><a class="nav-link" href="gruas.php">Grúas</a></li>
            <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header de página -->
    <section class="page-header">
      <div class="container">
        <h1 class="display-4 fw-bold">Refaccionaria</h1>
        <p class="lead">Las mejores marcas y autopartes de calidad garantizada</p>
      </div>
    </section>
    <!-- Contenido principal -->
    <section class="content-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h2>Refaccionaria ABZ Car</h2>
            <p class="lead">ABZ Car cuenta con su propia refaccionaria y venta de autopartes lo cual da facilidad y agiliza nuestros servicios de mantenimiento automotriz, de la misma forma se surte a todas nuestras sucursales y talleres In-plant con herramienta y refacciones.</p>
            
            <p>Cabe mencionar que manejamos las <span class="highlight">mejores marcas a nivel internacional</span> y que producto que no haya sido probado y aprobado por nosotros, no entra a la venta, asegurando así la calidad y buen funcionamiento de nuestras refacciones y autopartes.</p>
            
            <p>Actualmente ABZ Car cuenta con <span class="highlight">2 refaccionarias especializadas</span> en partes mecánicas y en partes eléctricas.</p>
          </div>
          <div class="col-lg-4">
            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?auto=format&fit=crop&w=600&q=80" class="img-fluid rounded shadow" alt="Refaccionaria ABZ">
          </div>
        </div>
      </div>
    </section>
    <!-- Ubicaciones -->
    <section class="content-section bg-light">
      <div class="container">
        <h2 class="text-center mb-5">Nuestras Refaccionarias</h2>
        <div class="row">
          <div class="col-md-6">
            <div class="location-card">
              <h5><i class="bi bi-gear-fill me-2"></i>Refaccionaria de Autopartes Mecánicas</h5>
              <p><strong>Ubicación:</strong> Calle Décima #3410 Col. Santa Rosa</p>
              <p><strong>Teléfono:</strong> 416-71-38</p>
              <p>Especializada en partes mecánicas de todo tipo de vehículos.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="location-card">
              <h5><i class="bi bi-lightning-fill me-2"></i>Refaccionaria de Autopartes Eléctricas</h5>
              <p><strong>Ubicación:</strong> Avenida Tecnológico #12100 Col. Revolución</p>
              <p><strong>Teléfono:</strong> 482-25-25</p>
              <p>Especializada en partes eléctricas y electrónicas automotrices.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Ventajas -->
    <section class="content-section">
      <div class="container">
        <h2 class="text-center mb-5">¿Por qué elegir nuestra refaccionaria?</h2>
        <div class="row">
          <div class="col-md-4 text-center mb-4">
            <i class="bi bi-shield-check display-4 text-success mb-3"></i>
            <h5>Calidad Garantizada</h5>
            <p>Solo vendemos productos probados y aprobados por nuestro equipo técnico.</p>
          </div>
          <div class="col-md-4 text-center mb-4">
            <i class="bi bi-award display-4 text-warning mb-3"></i>
            <h5>Mejores Marcas</h5>
            <p>Manejamos las mejores marcas a nivel internacional en autopartes.</p>
          </div>
          <div class="col-md-4 text-center mb-4">
            <i class="bi bi-tools display-4 text-primary mb-3"></i>
            <h5>Servicio Integral</h5>
            <p>Refacciones y servicio técnico especializado en un solo lugar.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Call to Action -->
    <section class="bg-dark text-white py-5">
      <div class="container text-center">
        <h2 class="mb-3">¿Necesita refacciones para su vehículo?</h2>
        <p class="lead mb-4">Contáctenos para consultar disponibilidad y precios</p>
        <a href="contacto.php" class="btn btn-primary-abz">Consultar refacciones</a>
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