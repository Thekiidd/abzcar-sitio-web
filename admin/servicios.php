<?php
session_start();
include '../config/config.php';

$mensaje = '';

// Procesar formulario
if ($_POST) {
    if (isset($_POST['accion'])) {
        if ($_POST['accion'] == 'crear') {
            $nombre = $conn->real_escape_string($_POST['nombre']);
            $descripcion = $conn->real_escape_string($_POST['descripcion']);
            $categoria = $conn->real_escape_string($_POST['categoria']);
            
            $sql = "INSERT INTO servicios (nombre, descripcion, categoria) VALUES ('$nombre', '$descripcion', '$categoria')";
            if ($conn->query($sql) === TRUE) {
                $mensaje = '<p style="color: green;">Servicio creado correctamente.</p>';
            } else {
                $mensaje = '<p style="color: red;">Error al crear el servicio.</p>';
            }
        } elseif ($_POST['accion'] == 'eliminar' && isset($_POST['id'])) {
            $id = (int)$_POST['id'];
            $sql = "DELETE FROM servicios WHERE id = $id";
            if ($conn->query($sql) === TRUE) {
                $mensaje = '<p style="color: green;">Servicio eliminado correctamente.</p>';
            } else {
                $mensaje = '<p style="color: red;">Error al eliminar el servicio.</p>';
            }
        }
    }
}

// Obtener servicios
$sql = "SELECT * FROM servicios ORDER BY categoria, nombre";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionar Servicios - ABZCAR</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background: #f5f5f5; }
        .container { max-width: 1200px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; }
        h1 { color: #333; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input, textarea, select { width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; }
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
        
        <h1>Gestionar Servicios</h1>
        <?php echo $mensaje; ?>
        
        <h2>Agregar Nuevo Servicio</h2>
        <form method="post">
            <input type="hidden" name="accion" value="crear">
            <div class="form-group">
                <label>Nombre:</label>
                <input type="text" name="nombre" required>
            </div>
            <div class="form-group">
                <label>Descripción:</label>
                <textarea name="descripcion" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label>Categoría:</label>
                <select name="categoria" required>
                    <option value="">Seleccionar categoría</option>
                    <option value="Mecánica">Mecánica</option>
                    <option value="Grúa">Grúa</option>
                    <option value="Diagnóstico">Diagnóstico</option>
                    <option value="Mantenimiento">Mantenimiento</option>
                </select>
            </div>
            <button type="submit">Agregar Servicio</button>
        </form>
        
        <h2>Servicios Existentes</h2>
        <?php if ($result->num_rows > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Categoría</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo htmlspecialchars($row['nombre']); ?></td>
                            <td><?php echo htmlspecialchars($row['descripcion']); ?></td>
                            <td><?php echo htmlspecialchars($row['categoria']); ?></td>
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
            <p>No hay servicios registrados.</p>
        <?php endif; ?>
    </div>
</body>
</html>
<?php $conn->close(); ?> 