<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cartas.css">    
</head>
<body>
    <form method="POST">
            <div class="btns">
                <button class = "simular" type="submit" name ="Tirar">Tirar</button>
                <button class = "ver" type="submit" name ="mostrarTiradas">Mostrar Tiradas</button>
                <button class = "reiniciar" type="submit" name ="reiniciar">Reiniciar</button>
            </div>
        </form>
    <?php
    session_start();
         class DadoPoker {
           
            public $dadoPoker;
            public $cubilete;


            public function __construct(){
                $this->dadoPoker = array("AS", "K", "Q", "J" , "7", "8");
                if (isset($_SESSION["totalCubiletes"])) {
                    $this->cubilete = $_SESSION["totalCubiletes"] ;  
                }else{
                    $this->cubilete = array();
                }
            }
public function tirar(){

    $random = rand(0,count($this->dadoPoker)-1);

    $tirada = $this->dadoPoker[$random];

    array_push($this->cubilete,$tirada);

    $_SESSION["totalCubiletes"] = $this->cubilete;

    return "<p>$tirada</p>";
}
            public function mostrarTirada(){
                foreach($this->cubilete as $tirada){
                    echo "<p>$tirada</p>";
                }
            }
         }
         $a = new DadoPoker();
         if(isset($_POST["Tirar"])){
                $tirar = $a->tirar();
                echo $tirar;        
        }
        if(isset($_POST["mostrarTiradas"])){
                $a->mostrarTirada();      
        }
        if(isset($_POST["reiniciar"])){
            session_destroy();
            header("Location: cartas.php");
            exit();
        }
         
    ?>

</body>
</html>
