<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!-- Script inicial -->
    <?php
        $archivo = 'miArchivo.xml';
        if (file_exists("$archivo"))
        { //abrimos llave y la cerraremos en otro script
            $x = simplexml_load_file($archivo)
                or die("Error: No se puede abrir el archivo xml");
                //obtenemos la lista de películas para utilizarla en el siguiente script
             $lista = $x->pelicula;
        //obtenemos el tamaño de la lista
             $numPelis = count($lista);
    ?> 
    <!-- creamos un contenedor -->
    <div class="container">
        <h1 class="titulo">Lista de Películas</h1>
    <!-- encerramos la tabla en otro contenedor especial
    para poder manipularla con un scroll horizontal -->
        <div class="table-responsive">
            <table class="table">
            <!-- Encabezado de tabla-->
                 <thead class="thead-dark">
                    <tr><!-- diseño del renglon de encabezado-->
                        <th>Id</th>
                        <th>Título</th>
                        <th>Año</th>
                        <th>Género</th>
                        <th>Clasificación</th>
                    </tr>
                </thead>
                <!-- cuerpo de la tabla -->
                <tbody>
                    <?php
                        for($i = 0; $i < $numPelis; $i++){
                            echo '<tr>';
                            echo '<td><b>' . $lista[$i]->attributes()->peli_id . '</b></td>';
                            echo '<td>' . $lista[$i]->titulo . '</b></td>';
                            echo '<td>' . $lista[$i]->año . '</td>';
                            echo '<td>' . $lista[$i]->genero . '</td>';
                            echo '<td>' . $lista[$i]->clasificacion . '</td>';
                            echo '</tr>';
                        }
                 
                    ?>
                </tbody> <!-- fin del script -->
            </table>
        </div>
    </div>
    <?php
        }
        ?>

</body>
</html>