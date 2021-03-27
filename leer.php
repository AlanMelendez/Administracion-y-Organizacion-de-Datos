<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// Tratamos de abrir el archivo, si no se puede
// mandamos un mensaje: no se puede abrir...
    $miArchivo = fopen("miDiccionario.txt", "r")
        or die("No se puede abrir el archivo!");
// Utilizamos un ciclo while para recorrer línea a línea
// el archivo mientras no sea fin de archivo
// y obtenemos dicha línea y la mostramos
    while (!feof($miArchivo)) {
        echo fgets($miArchivo) . "<br>";
    }
// cerramos el archivo
    fclose($miArchivo);
    
    ?>
</body>
</html>