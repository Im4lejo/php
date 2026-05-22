<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <div>
        <form method="post">
            <button class = "simular" type="submit" name ="Calcular">=</button>
            <button class = "simular" type="submit" name ="1">1</button>
        </form>
    </div>

    <?php 
        class Calculadora {
            private $num_1;
            private $num_2;
            public function __construct(){
                $this->num_1 = 0;
                $this->num_2 = 0;
            }
            public function getNum_1(){
                return $this->num_1;
            }
            public function setNum_1($num_1){
                $this->num_1 = $num_1;
            }
            public function getNum_2(){
                return $this->num_2;
            }
            public function setNum_2($num_2){
                $this->num_2 = $num_2;
            }
            public function addValue($num){
                $num = $this->getNum_1();
            }
        }
    ?>
</body>
</html>