<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arquivo php</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

<?php

$abs = $_GET ["abs"];
echo "<p> o número real de $abs é: " . abs ($abs);


?>
    
</body>
</html>