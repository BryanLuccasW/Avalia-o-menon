<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arquivo de PHP</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    


<?php

$num1 = $_GET ["num1"];
$num2 = $_GET ["num2"];

echo "<p> o valor da divisão de $num2 é: " . intdiv($num1, $num2);

?>
</body>
</html>