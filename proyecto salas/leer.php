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
        $archivo=fopen("datos.txt","w"); //Abro el archivo en modo escritura.
        $rand = range(1, 100); //Generamos valores aleatorios para escribirlos en el archivo
        shuffle($rand); //Generemos los aleatorios.
        $matriz=array(); //Esta matriz almacenara nuestros datos.
        $variable_control=0;
        

        //Con esto voy a recorrer la matriz, Y con cada valor que lo valla escribiendo.
        foreach($rand as $val)
        {
            //Esta condicion es solo para tomar 14 valores de 100 que generamos con el $rand
            if($variable_control<14){
                array_push($matriz,$val); //vamos agregando los valores pero al array.
                fwrite($archivo,"$val  \n"); //Aqui le digo que escribira en archivo, Lo que alla en la variable $val del foreach.
                $variable_control++; //Aumentamos en uno la variable control.
            } else{
                break;
            }
            
            
        }

        //Creare una variable que almacenara las suma de los valores de la matriz.
        $almacenaje=0;
        $contador=0;
        foreach($matriz as $val2)
        {
            $almacenaje=$almacenaje+=$val2; //Aqui voy sumando los valores recorridos.
            echo"$val2 \n <br>"; //Aqui los voy mostrando
            $contador++;
            
        }
        //Obtenemos los valores mas bajos y altos de la matriz para hacer la nueva media.
        $vmax=intval(max($matriz)); //Intval es para convertirlos a enteros.
        $vmin=intval(min($matriz));
        $vlol=intval(max($matriz)); //Esta la declare por que se ve afectada en el if de la linea 57 por las operaciondes de las lineas 55 y 54
        
        $promedio=intval($almacenaje/=$contador); //Obtenemos promedio.
        echo("<br>El promedio es: $promedio"); //Mostramos promedio.
        
        
        
        
        $v1=$vmax-=$promedio;
        $v2=$promedio-=$vmin;
        
        if(($v1)>($v2)){
            echo("<br>El valor mas alejado es: $vlol");
         }else{
             echo("<br>El valor mas alejado 2 es: $vmin");
         }

        
        fclose($archivo); //Cierro el archivo.
    ?>
</body>
</html>