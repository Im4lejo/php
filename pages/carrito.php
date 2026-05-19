<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    require_once "../classes/producto.php";
    require_once "../classes/tienda.php";
    require_once "../pages/header.php";
    session_start();
    $productos = $_SESSION["productos"];
        $tienda = new Tienda();
            $tienda->verCarrito();

        if(isset($_POST["VaciarCarrito"])){
            $_SESSION["verCarrito"] = array();
            
        }
?>
</body>
</html>