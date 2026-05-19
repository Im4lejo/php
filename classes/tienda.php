<?php 
        class Tienda{
            public function __construct()
            {
                $product = new Producto("","",0);
                if(!isset($_SESSION["verCarrito"])){
                    $_SESSION["verCarrito"]  = array();
                }
            }
            public function addToCarrito($producto_seleccionado){
                if(!isset($_POST["verCarrito"])){
                    array_push($_SESSION["verCarrito"],$producto_seleccionado);
                }

            }
            public function verCarrito(){

                foreach($_SESSION["verCarrito"] as $producto){
                    $producto->mostrarProducto($producto);
                }
            }
            public function verProductos($lista){
                foreach($lista as $producto){
                    $producto->mostrarProducto();
                }
            }
        }
?>