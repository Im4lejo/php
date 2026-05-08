<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form method = "POST">
        <div>
             <input class = "text_box" type="text" name= "palabra" placeholder = "ingrese la palabra" >
            <input class="submit" type="submit" name="verificar" value="verificar">

        </div>
    </form>
    <br>
        <?php 
        $textbox = $_POST["palabra"];
        $contador_palabra = strlen($textbox);
        $palabraAlreves = "";
        $result = false;

        if(isset($_POST["verificar"])){
            $result = getPalindromo($textbox,$contador_palabra,$palabraAlreves);
        }   
        if($textbox == null){
            $result = false;
        }

    function getPalindromo($textbox,$contador_palabra,$palabraAlreves){
            for($i = $contador_palabra-1; $i >= 0; $i--){
                $palabraAlreves .= $textbox[$i];
            }

            return $textbox == $palabraAlreves;
        }
        function ifPalindromo($result, $textbox){
            if($result){
                echo "<h3>la palabra $textbox es palindromo</h3>";
            }else{
                echo "<h3>la palabra $textbox no es palindromo</h3>";
            }
        }


        ?>
        <div class = "result"><h3><?php echo ifPalindromo($result,$textbox) ?></h3></div>
</body>
</html>