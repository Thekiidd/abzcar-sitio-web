<?php /* servicios.php - Página de servicios ABZCAR, Bootstrap 5, navbar y footer unificados */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios | ABZCAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', Arial, sans-serif; background: #f4f6f8; }
        .topbar-abz { background: #444c56; color: #fff; font-size: 0.97rem; padding: 0.3rem 0; border-bottom: 2px solid #ff4d1c; }
        .topbar-abz .container { display: flex; flex-wrap: wrap; align-items: center; gap: 2rem; }
        .navbar-abz { background: #23272b; }
        .navbar-abz .navbar-brand img { height: 55px; margin-right: 10px; }
        .navbar-abz .nav-link { color: #fff !important; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; position: relative; transition: color 0.2s; }
        .navbar-abz .nav-link::after { content: ''; display: block; width: 0; height: 3px; background: #ff4d1c; border-radius: 2px; position: absolute; left: 0; bottom: -2px; transition: width 0.3s cubic-bezier(.4,0,.2,1); }
        .navbar-abz .nav-link:hover, .navbar-abz .nav-link.active { color: #ff4d1c !important; }
        .navbar-abz .nav-link:hover::after, .navbar-abz .nav-link.active::after { width: 100%; }
        .footer-abz { background: #23272b; color: #fff; border-top: 4px solid #ff4d1c; padding: 2.5rem 0 1.2rem 0; }
        .footer-abz a { color: #fff; text-decoration: none; }
        .footer-abz a:hover { color: #ff4d1c; }
        .footer-abz .footer-bottom { border-top: 1px solid #444c56; margin-top: 2rem; padding-top: 1rem; text-align: center; color: #bbb; font-size: 0.97rem; }
        .service-img { width: 100%; height: 160px; object-fit: cover; border-radius: 8px; margin-bottom: 1rem; }
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
            <li class="nav-item"><a class="nav-link active" href="servicios.php">Servicios</a></li>
            <li class="nav-item"><a class="nav-link" href="flotillas.php">Flotillas</a></li>
            <li class="nav-item"><a class="nav-link" href="refaccionaria.php">Refaccionaria</a></li>
            <li class="nav-item"><a class="nav-link" href="seminuevos.php">Seminuevos</a></li>
            <li class="nav-item"><a class="nav-link" href="gruas.php">Grúas</a></li>
            <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Contenido principal de servicios -->
    <div class="container my-5">
      <h1 class="mb-4 fw-bold text-center">Nuestros Servicios</h1>
      <div class="row text-center">
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm border-0">
            <img src="https://images.unsplash.com/photo-1511918984145-48de785d4c4e?auto=format&fit=crop&w=600&q=80" class="service-img" alt="Mecánica General">
            <div class="card-body">
              <i class="bi bi-tools display-4 text-primary mb-3"></i>
              <h5 class="card-title">Mecánica General</h5>
              <p class="card-text">Reparación y mantenimiento completo de vehículos con tecnología de vanguardia.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm border-0">
            <img src="https://images.unsplash.com/photo-1503736334956-4c8f8e92946d?auto=format&fit=crop&w=600&q=80" class="service-img" alt="Servicio de Grúa">
            <div class="card-body">
              <i class="bi bi-truck display-4 text-danger mb-3"></i>
              <h5 class="card-title">Servicio de Grúa</h5>
              <p class="card-text">Asistencia 24/7 con grúas equipadas para cualquier tipo de emergencia vial.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm border-0">
            <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=600&q=80" class="service-img" alt="Diagnóstico Computarizado">
            <div class="card-body">
              <i class="bi bi-laptop display-4 text-info mb-3"></i>
              <h5 class="card-title">Diagnóstico Computarizado</h5>
              <p class="card-text">Análisis preciso de fallas con equipos de última generación.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
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
            <p>📍 Calle Principal #123</p>
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
          Copyright &copy; <?php echo date('Y'); ?> ABZCAR. Todos los derechos reservados.
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 