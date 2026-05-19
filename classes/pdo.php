<?php
if(isset($_POST["sendInfo"])){
require_once '../config/db.php';
require_once '../pages/register.php';

try {
// Preparar la consulta con marcadores nombrados
$sql = "INSERT INTO usuario (nombre, email, fecha_registro , genre) VALUES (:nombre, :email, :fecha_registro, :genre )";
$stmt = $pdo->prepare($sql);    
$fecha_registro = date('Y-m-d H:i:s');
// Vincular valores y ejecutar
$stmt->execute([
':nombre' => $_POST["nombre"],
':email' => $_POST["email"],
':fecha_registro' => $fecha_registro,
':genre' => $_POST["genre"]
]);
echo " Usuario insertado con éxito. ";
} catch (PDOException $e) {
echo " Fallo al insertar ";
}
}

?>