<?php 
   echo "<h2>Primer ejemplo</h2>";
    //arreglo asociativo con edades
    $edades = array("Pedro"=>35, "Benito"=>37, "Joel"=>43);
    //convertimos arreglo asociativo en json
    $mijson = json_encode($edades);
    //mostrammos variable
    echo $mijson;

    echo "<br> <h2>Segundo ejemplo</h2>";

    //arreglo normal -indexado
    $autos = array("Volvo", "BMW", "Toyota");
    //convertimos arreglo asociativo en json
    $mijson = json_encode($autos);
    //mostrammos variable
    echo $mijson;

    echo "<br> <h2>Tercer ejemplo</h2>";

    $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
    $x = json_encode($arr);
    echo $x;
    
    echo "<br> <h2>Cuarto ejemplo</h2>";
    $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, array("Pedro"=>35, "Benito"=>37, "Joel"=>43));
    $x = json_encode($arr);
    echo $x;



