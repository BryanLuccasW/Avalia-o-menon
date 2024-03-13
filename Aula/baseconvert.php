<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arquivo PHP</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

<?php

$valorinicial = $_GET["valorinicial"];
$basen = $_GET["basen"];
$baseconvert = $_GET["baseconvert"];

echo "<p> a base $InformeDestino é: ". base_convert($valorinicial,$basen, $baseconvert,);

?>
    
</body>
</html>