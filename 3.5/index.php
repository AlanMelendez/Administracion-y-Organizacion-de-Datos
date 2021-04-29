<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <?php
        $nombreArchivo = "territory_names.csv";
        $archivo = fopen($nombreArchivo, "r") or die("No se puede abrir el archivo:$nombreArchivo");
        $datos = array();
    ?>
    <div class="container">
        <h1 class="titulo">Territorios del Mundo</h1>
        <table class="table">
        <!-- Diseño del encabezado de tabla-->
            <thead class="thead-dark">
                <!-- encabezado-->
                <tr>
                    <!-- diseño del renglon de encabezado-->
                    <th>Abrebiatura</th>
                    <th>Nombre</th>
                    <th>Nombre Oficial</th>
                    <th>Nombres de Ciudadanos</th>
                </tr>
            </thead>
            <tbody>
                <?php
                     while (($datos = fgetcsv($archivo, 0, ',', '"', '"')) !== false) {
                         print("<tr>");
                         foreach($datos as $campo){
                            print("<td>");
                            print("$campo");
                            print("</td>");
                           
                         }
                         print("</tr>");
                        }
                    
                ?>

            </tbody>
        </table>
    </div>
</body>
</html>