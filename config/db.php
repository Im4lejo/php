<?php
    // config/db.php - Conexión a MySQL usando PDO
    $host = 'localhost'; // Servidor MySQL (normalmente localhost)
    $dbname = 'tienda'; // Nombre de la base de datos
    $username = 'root'; // Usuario de MySQL (en XAMPP por defecto 'root')
    $password = ''; // Contraseña (vacío en XAMPP)
    $charset = 'utf8mb4'; // Codificación completa (soporta emojis)
    // DSN (Data Source Name)
    $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
    // Opciones de PDO para máximo rendimiento y seguridad
    $options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Lanza excepciones en errores
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Fetch como array asociativo
    PDO::ATTR_EMULATE_PREPARES => false, // Usa prepared statements nativos
    ];
    try {
    // Crear instancia PDO
    $pdo = new PDO($dsn, $username, $password, $options);
    // (Opcional) Podemos comentar el eco para producción
    // echo " Conexión exitosa a la base de datos";
    } catch (PDOException $e) {
    // En entornos de desarrollo mostrar mensaje, en producción registrar error
    die(" Error de conexión PDO: " . $e->getMessage());

}
?>