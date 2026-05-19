<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tienda.css">
</head>
<body>
    <?php

    require_once "../classes/producto.php";
    require_once "../classes/tienda.php";
    require_once "../pages/header.php";
    session_start();
    
        $product1  = new Producto("pantalla", "pantalla 4 pulgadas", 45000);
        $product2  = new Producto("mouse", "mouse gamer", 45000);
        //$product1->mostrarProducto($product1);
        $tienda = new Tienda();
        $lista_productos = array();
        array_push($lista_productos, $product1,$product2);
                $_SESSION["productos"] = $lista_productos;
        if(isset($_POST["addCarrito"])){
                $producto_seleccionado = $_POST["addCarrito"];
                foreach($lista_productos as $prod){
                    if($producto_seleccionado == $prod->name){
                        $tienda->addToCarrito($prod);
                    }
                }
        }
        $tienda->verProductos($lista_productos);
        if(isset($_POST["verCarrito"])){
            $tienda->verCarrito();
        }

        if(isset($_POST["VaciarCarrito"])){
            $_SESSION["verCarrito"] = array();
        }
        // crear funcion para ver si los productos que se agregan ya estna en el carrito y si si solo aumentar su contador de la cantidad de cada producto.
    ?>
</body>
</html>
