<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 1.4</title>
</head>
<body>
    <?php
        //Creamos una variable cualquiera, Pero ahi ponemos el nombre del archivo
        $Variablearchivo="ArchivoNuevo.txt";

        //Abrimos el archivo en modo escritura, para ello creamos una nueva variable para hacerlo
        $archivo= fopen($Variablearchivo,"w")
            or die ("Error al abrir al archivo");
           


        //Ahora escribimos en el archivo
        fwrite($archivo,"Estoy escribiendo en el archivo\n");

        //Cerramos el archivo
        fclose($archivo);

        //Leemos el archivo para poder verlo funcionar
        $texto= readfile($Variablearchivo);
        //echo"<div> $texto </div>";
        
    ?>
    
</body>
</html>