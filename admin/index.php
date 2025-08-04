<?php
session_start();
include '../config/config.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración - ABZCAR</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background: #f5f5f5; }
        .container { max-width: 1200px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; }
        h1 { color: #333; text-align: center; }
        .admin-menu { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-top: 30px; }
        .admin-item { background: #f8f9fa; padding: 20px; border-radius: 8px; text-align: center; border: 1px solid #dee2e6; }
        .admin-item a { text-decoration: none; color: #333; font-weight: bold; }
        .admin-item:hover { background: #e9ecef; }
        .stats { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; margin-bottom: 30px; }
        .stat-card { background: #007bff; color: white; padding: 15px; border-radius: 8px; text-align: center; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Panel de Administración - ABZCAR</h1>
        
        <div class="stats">
            <?php
            $sql_servicios = "SELECT COUNT(*) as total FROM servicios";
            $sql_testimonios = "SELECT COUNT(*) as total FROM testimonios";
            $sql_contactos = "SELECT COUNT(*) as total FROM contactos";
            $sql_proyectos = "SELECT COUNT(*) as total FROM proyectos";
            
            $servicios = $conn->query($sql_servicios)->fetch_assoc()['total'];
            $testimonios = $conn->query($sql_testimonios)->fetch_assoc()['total'];
            $contactos = $conn->query($sql_contactos)->fetch_assoc()['total'];
            $proyectos = $conn->query($sql_proyectos)->fetch_assoc()['total'];
            ?>
            <div class="stat-card">
                <h3><?php echo $servicios; ?></h3>
                <p>Servicios</p>
            </div>
            <div class="stat-card">
                <h3><?php echo $testimonios; ?></h3>
                <p>Testimonios</p>
            </div>
            <div class="stat-card">
                <h3><?php echo $contactos; ?></h3>
                <p>Contactos</p>
            </div>
            <div class="stat-card">
                <h3><?php echo $proyectos; ?></h3>
                <p>Proyectos</p>
            </div>
        </div>
        
        <div class="admin-menu">
            <div class="admin-item">
                <a href="servicios.php">Gestionar Servicios</a>
            </div>
            <div class="admin-item">
                <a href="testimonios.php">Gestionar Testimonios</a>
            </div>
            <div class="admin-item">
                <a href="proyectos.php">Gestionar Proyectos</a>
            </div>
            <div class="admin-item">
                <a href="faqs.php">Gestionar FAQs</a>
            </div>
            <div class="admin-item">
                <a href="contactos.php">Ver Contactos</a>
            </div>
            <div class="admin-item">
                <a href="../index.php">Ver Sitio Web</a>
            </div>
        </div>
    </div>
</body>
</html>
<?php $conn->close(); ?> 