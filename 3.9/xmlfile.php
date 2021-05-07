<?php
$nombreArchivo = "biblioteca.xml";
if (file_exists($nombreArchivo)){
    $miXML = simplexml_load_file($nombreArchivo)
        or die("Error: No se puede crear el objeto SimpleXMLElement");
    //var_dump($miXML);
    //var_dump($miXML->libro[0]);
    //var_dump($miXML->libro[0]->attributes());
   

    //Mostrar todos los datos:
    //L1
    echo ($miXML->libro[0]->attributes()->isbn);
    echo('<br>');
    echo ($miXML->libro[0]->attributes()[0]);
    echo('<br>');
    echo ($miXML->libro[0]->attributes()['isbn']);
    echo('<br>');
    $nombreLibro1 = $miXML->libro[0]->titulo;
    $precioLibro1 = $miXML->libro[0]->precio;
    $modedaLibro1 = $miXML->libro[0]->precio->attributes()['moneda'];
    echo ("El tercer Libro \"" . $nombreLibro1 . "\"cuesta " . $precioLibro1 . " en
    " . $modedaLibro1);
    echo('<br>');
    echo('<br>');
    //L2
    echo ($miXML->libro[1]->attributes()->isbn);
    echo('<br>');
    echo ($miXML->libro[1]->attributes()[0]);
    echo('<br>');
    echo ($miXML->libro[1]->attributes()['isbn']);
    echo('<br>');
    $nombreLibro2 = $miXML->libro[1]->titulo;
    $precioLibro2 = $miXML->libro[1]->precio;
    $modedaLibro2 = $miXML->libro[1]->precio->attributes()['moneda'];
    echo ("El tercer Libro \"" . $nombreLibro2 . "\"cuesta " . $precioLibro2 . " en
    " . $modedaLibro2);
    echo('<br>');
    echo('<br>');

    //L3
    echo ($miXML->libro[2]->attributes()->isbn);
    echo('<br>');
    echo ($miXML->libro[2]->attributes()[0]);
    echo('<br>');
    echo ($miXML->libro[2]->attributes()['isbn']);
    echo('<br>');
    
    //Mostrar Siguiente Libro
    $nombreLibro3 = $miXML->libro[2]->titulo;
    $precioLibro3 = $miXML->libro[2]->precio;
    $modedaLibro3 = $miXML->libro[2]->precio->attributes()['moneda'];
    echo ("El tercer Libro \"" . $nombreLibro3 . "\"cuesta " . $precioLibro3 . " en
    " . $modedaLibro3);
    echo('<br>');
    echo('<br>');
    echo('<br>');


}