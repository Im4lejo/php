<?php
if(isset($_POST["sendInfo"])){
require_once '../config/db.php';
require_once '../pages/register.php';
require_once '../classes/user.php';

try {
$user = new User();
// Preparar la consulta con marcadores nombrados
$sql = "INSERT INTO usuario (nombre, email, fecha_registro , genre) VALUES (:nombre, :email, :fecha_registro, :genre )";
$stmt = $pdo->prepare($sql);    
$fecha_registro = date('Y-m-d H:i:s');
$user->setName($_POST["nombre"]);
$user->setEmail($_POST["email"]);
$user->setGenre($_POST["genre"]);
// Vincular valores y ejecutar
$stmt->execute([
':nombre' => $user->getName(),
':email' => $user->getEmail(),
':fecha_registro' => $fecha_registro,
':genre' => $user->getGenre()
]);
echo " Usuario insertado con éxito. ";
} catch (PDOException $e) {
echo " Fallo al insertar ";
}
}

?>