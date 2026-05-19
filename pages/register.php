<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method= "post">
        <div>
            <label for="nombre">Nombre </label>
            <br>
            <input type="text" name="nombre">
            <br>
            <label for="correo" >Correo </label>
            <br>
            <input type="text" name="email">
            <br>
            <label for="genre">Género pe</label>
            <br>
            <select name="genre">
                <option value="">-- Selecciona --</option>
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
            </select>
            <br>
            <br>
            <button class="" type="submit" name="sendInfo">Registrarse</button>
                <?php 
                    require_once "../classes/pdo.php"
                ?>
        </div>    
    </form>
</body>
</html>