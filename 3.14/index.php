<?php
    $miJson = '{"Pedro":35,"Benito":37,"Joel":43}';
    //decodificamos el json, convertimos a objeto PHP
    // nota que no utilizamos assoc = true
    $obj = json_decode($miJson, false);
    
    //mostramos contenido del objeto
    var_dump($obj);

    echo'<br> <br>';
    $obj = json_decode($miJson, true);
    var_dump($obj);
    echo'<br> <br>';

    //creamos json
$json = '{"Pedro":35,"Benito":37,"Joel":43}';
//decodificamos a objeto
$obj = json_decode($json);
// utilzamos la notación de objetos ya conocida,
// mostramos valores de propiedades,
// cada nombre del json se convierte en propiedad.
// Recuerda que tenemos la paridad 'nombre:valor' en json
echo 'Propiedad 1: '. $obj->Pedro;
echo '<br>';
echo 'Propiedad 2: '.$obj->Benito;
echo '<br>';
echo 'Propiedad 3: '.$obj->Joel;
echo'<br> <br>';
//creamos json como ejemplo
$json = '{"Pedro":35,"Benito":37,"Joel":43}';
//usamos true para poder convertirlo en arreglo en vez de objeto
$arr = json_decode($json, true);
//utilzamos con la notación de arreglos ya conocida
// mostramos los valores asociados
// cada nombre del json se convierte en ubicación
//recuerda que tenemos la paridad 'nombre:valor' en json
echo $arr["Pedro"];
echo '<br>';
echo $arr["Benito"];
echo '<br>';
echo $arr["Joel"];


?>