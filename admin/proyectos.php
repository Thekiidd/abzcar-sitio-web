<?php
session_start();
include '../config/config.php';

$mensaje = '';

// Procesar formulario
if ($_POST) {
    if (isset($_POST['accion'])) {
        if ($_POST['accion'] == 'crear') {
            $titulo = $conn->real_escape_string($_POST['titulo']);
            $descripcion = $conn->real_escape_string($_POST['descripcion']);
            $imagen = $conn->real_escape_string($_POST['imagen']);
            $fecha = $conn->real_escape_string($_POST['fecha']);
            
            $sql = "INSERT INTO proyectos (titulo, descripcion, imagen, fecha) VALUES ('$titulo', '$descripcion', '$imagen', '$fecha')";
            if ($conn->query($sql) === TRUE) {
                $mensaje = '<p style="color: green;">Proyecto creado correctamente.</p>';
            } else {
                $mensaje = '<p style="color: red;">Error al crear el proyecto.</p>';
            }
        } elseif ($_POST['accion'] == 'eliminar' && isset($_POST['id'])) {
            $id = (int)$_POST['id'];
            $sql = "DELETE FROM proyectos WHERE id = $id";
            if ($conn->query($sql) === TRUE) {
                $mensaje = '<p style="color: green;">Proyecto eliminado correctamente.</p>';
            } else {
                $mensaje = '<p style="color: red;">Error al eliminar el proyecto.</p>';
            }
        }
    }
}

// Obtener proyectos
$sql = "SELECT * FROM proyectos ORDER BY fecha DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionar Proyectos - ABZCAR</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background: #f5f5f5; }
        .container { max-width: 1200px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; }
        h1 { color: #333; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input, textarea { width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; }
        button { background: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background: #0056b3; }
        .btn-danger { background: #dc3545; }
        .btn-danger:hover { background: #c82333; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 10px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background: #f8f9fa; }
        .back-link { margin-bottom: 20px; }
        .back-link a { color: #007bff; text-decoration: none; }
    </style>
</head>
<body>
    <div class="container">
        <div class="back-link">
            <a href="index.php">← Volver al Panel</a>
        </div>
        
        <h1>Gestionar Proyectos</h1>
        <?php echo $mensaje; ?>
        
        <h2>Agregar Nuevo Proyecto</h2>
        <form method="post">
            <input type="hidden" name="accion" value="crear">
            <div class="form-group">
                <label>Título:</label>
                <input type="text" name="titulo" required>
            </div>
            <div class="form-group">
                <label>Descripción:</label>
                <textarea name="descripcion" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label>URL de Imagen:</label>
                <input type="text" name="imagen" placeholder="https://ejemplo.com/imagen.jpg">
            </div>
            <div class="form-group">
                <label>Fecha:</label>
                <input type="date" name="fecha" required>
            </div>
            <button type="submit">Agregar Proyecto</button>
        </form>
        
        <h2>Proyectos Existentes</h2>
        <?php if ($result->num_rows > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Descripción</th>
                        <th>Imagen</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo htmlspecialchars($row['titulo']); ?></td>
                            <td><?php echo htmlspecialchars($row['descripcion']); ?></td>
                            <td><?php echo $row['imagen'] ? htmlspecialchars($row['imagen']) : 'Sin imagen'; ?></td>
                            <td><?php echo date('d/m/Y', strtotime($row['fecha'])); ?></td>
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
            <p>No hay proyectos registrados.</p>
        <?php endif; ?>
    </div>
</body>
</html>
<?php $conn->close(); ?> 