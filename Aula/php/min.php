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

$value = $_GET ["value"];
$values = $_GET ["values"];
$values_array = $_GET ["values_array"];

echo "<p> o valor mínimo de $value, $values e $value_array é: " . min($value, $values, $values_array);

?>
    
</body>
</html>