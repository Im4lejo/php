<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Automovil{
            public $marca;

            public $modelo;
            public function __construct($modelo,$marca){
                $this->modelo = $modelo;
                $this->marca = $marca;
            }
            public function imprimir(){
                return "Hola! soy un $this->marca modelo $this->modelo";
            }
        }
        class Camion extends Automovil{
            public $ejes;
            #[Override]
            public function imprimir(){
                echo  parent::imprimir() . " con $this->ejes ejes";
            }
        }
        $c = new Camion("toshota","coroya");
        $c->ejes = 4;
        $c->imprimir();

    ?>
</body>
</html>