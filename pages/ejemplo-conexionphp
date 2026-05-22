<?php
// index.php - Ejemplo completo
require_once __DIR__ . '../../../config/db.php';
try {
// Consulta segura (sin datos del usuario)
$sql = "SELECT id, nombre, email, fecha_registro FROM usuarios ORDER BY id DESC";
$stmt = $pdo->query($sql);
$usuarios = $stmt->fetchAll();
} catch (PDOException $e) {
die("Error en la consulta: " . $e->getMessage());
}
?>





<!DOCTYPE html>
<html>
<head><title>Lista de usuarios</title></head>
<body>
<h2> Usuarios registrados</h2>
<?php if(count($usuarios) > 0): ?>
<table border="1" cellpadding="8">
<tr><th>ID</th><th>Nombre</th><th>Email</th><th>Registro</th></tr>
<?php foreach($usuarios as $user): ?>
<tr>
<td><?= htmlspecialchars($user['id']) ?></td>
<td><?= htmlspecialchars($user['nombre']) ?></td>
<td><?= htmlspecialchars($user['email']) ?></td>
<td><?= htmlspecialchars($user['fecha_registro']) ?></td>
</tr>
<?php endforeach; ?>
</table>
<?php else: ?>
<p>No hay usuarios.</p>
<?php endif; ?>
</body>
</html>