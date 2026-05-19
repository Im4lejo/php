<?php 
class Producto{
            public $name;
            public $descripcion;
            public $precio;


            public function __construct($name,$descripcion,$precio)
            {
                $this->name = $name;
                $this->descripcion = $descripcion;
                $this->precio = $precio;
            }
            public function mostrarProducto(){
                echo "<form method=\"post\"><div><p>$this->name</p><p>$this->descripcion</p><p>$this->precio</p><button class = \"carrito\" type=\"submit\" name =\"addCarrito\" value = '$this->name' >Añadir al carrito</button></div></form>";
            }
        }
?>