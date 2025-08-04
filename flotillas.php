<?php /* flotillas.php - Página de flotillas ABZCAR, inspirada en la web de referencia */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flotillas | ABZCAR</title>
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
        .page-header { background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1560472354-b33ff0c44a43?auto=format&fit=crop&w=1920&q=80'); background-size: cover; background-position: center; color: white; padding: 80px 0; text-align: center; }
        .content-section { padding: 60px 0; }
        .content-section h2 { color: #23272b; margin-bottom: 2rem; }
        .content-section .highlight { color: #ff4d1c; font-weight: 600; }
        .service-feature { background: white; border-radius: 8px; padding: 2rem; box-shadow: 0 4px 16px rgba(0,0,0,0.1); margin-bottom: 2rem; }
        .service-feature .icon { font-size: 3rem; color: #ff4d1c; margin-bottom: 1rem; }
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
            <li class="nav-item"><a class="nav-link active" href="flotillas.php">Flotillas</a></li>
            <li class="nav-item"><a class="nav-link" href="refaccionaria.php">Refaccionaria</a></li>
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
        <h1 class="display-4 fw-bold">Flotillas</h1>
        <p class="lead">Servicio integral para el mantenimiento de flotillas empresariales</p>
      </div>
    </section>
    <!-- Contenido principal -->
    <section class="content-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h2>Servicio Integral para Flotillas</h2>
            <p class="lead">ABZ Car cuenta con uno de los menús de Servicios más completos del país por lo cual está en condiciones de poder ofrecer a las empresas un servicio <span class="highlight">integral para el mantenimiento de sus flotillas y vehículos utilitarios</span>.</p>
            
            <p>Además de realizar prácticamente todos los servicios para automóviles y camiones ligeros, nuestra empresa cuenta con todo un <span class="highlight">sistema de control</span> y seguimiento a flotillas que ha resuelto el problema eterno del control del gasto de mantenimiento de sus unidades.</p>
            
            <p>De esta manera su empresa enfoca sus esfuerzos a la razón de ser de sus negocios y deja a ABZ Car ocuparse de tener sus unidades en condiciones óptimas de operación, rodando y produciendo.</p>
          </div>
          <div class="col-lg-4">
            <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?auto=format&fit=crop&w=600&q=80" class="img-fluid rounded shadow" alt="Servicio de flotillas">
          </div>
        </div>
      </div>
    </section>
    <!-- Servicios para flotillas -->
    <section class="content-section bg-light">
      <div class="container">
        <h2 class="text-center mb-5">Beneficios para su Flotilla</h2>
        <div class="row">
          <div class="col-md-4">
            <div class="service-feature text-center">
              <div class="icon"><i class="bi bi-tools"></i></div>
              <h5>Mantenimiento Integral</h5>
              <p>Servicios completos para automóviles y camiones ligeros con tecnología de vanguardia.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-feature text-center">
              <div class="icon"><i class="bi bi-graph-up"></i></div>
              <h5>Sistema de Control</h5>
              <p>Control y seguimiento completo del gasto de mantenimiento de sus unidades.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-feature text-center">
              <div class="icon"><i class="bi bi-shield-check"></i></div>
              <h5>Garantía de Calidad</h5>
              <p>Más de 30 años de experiencia garantizando el funcionamiento óptimo de su flotilla.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Call to Action -->
    <section class="bg-dark text-white py-5">
      <div class="container text-center">
        <h2 class="mb-3">¿Necesita servicio para su flotilla?</h2>
        <p class="lead mb-4">Contáctenos para obtener una propuesta personalizada</p>
        <a href="contacto.php" class="btn btn-primary-abz">Solicitar cotización</a>
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