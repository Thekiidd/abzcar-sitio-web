<?php
session_start();
include '../config/config.php';

$mensaje = '';

// Procesar eliminación
if ($_POST && isset($_POST['accion']) && $_POST['accion'] == 'eliminar' && isset($_POST['id'])) {
    $id = (int)$_POST['id'];
    $sql = "DELETE FROM contactos WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        $mensaje = '<p style="color: green;">Contacto eliminado correctamente.</p>';
    } else {
        $mensaje = '<p style="color: red;">Error al eliminar el contacto.</p>';
    }
}

// Obtener contactos
$sql = "SELECT * FROM contactos ORDER BY fecha DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Contactos - ABZCAR</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background: #f5f5f5; }
        .container { max-width: 1200px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; }
        h1 { color: #333; }
        .btn-danger { background: #dc3545; color: white; padding: 8px 15px; border: none; border-radius: 4px; cursor: pointer; }
        .btn-danger:hover { background: #c82333; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 10px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background: #f8f9fa; }
        .back-link { margin-bottom: 20px; }
        .back-link a { color: #007bff; text-decoration: none; }
        .contacto-mensaje { max-width: 300px; word-wrap: break-word; }
    </style>
</head>
<body>
    <div class="container">
        <div class="back-link">
            <a href="index.php">← Volver al Panel</a>
        </div>
        
        <h1>Contactos Recibidos</h1>
        <?php echo $mensaje; ?>
        
        <?php if ($result->num_rows > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>Mensaje</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo htmlspecialchars($row['nombre']); ?></td>
                            <td><?php echo htmlspecialchars($row['correo']); ?></td>
                            <td><?php echo htmlspecialchars($row['telefono']); ?></td>
                            <td class="contacto-mensaje"><?php echo htmlspecialchars($row['mensaje']); ?></td>
                            <td><?php echo date('d/m/Y H:i', strtotime($row['fecha'])); ?></td>
                            <td>
                                <form method="post" style="display: inline;">
                                    <input type="hidden" name="accion" value="eliminar">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" class="btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No hay contactos registrados.</p>
        <?php endif; ?>
    </div>
</body>
</html>
<?php $conn->close(); ?> 