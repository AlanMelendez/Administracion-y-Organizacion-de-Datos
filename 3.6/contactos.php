<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
   
    <!--Script php que empieza a configurar la página con los datos de la agenda -->
     <?php
        $nombreArchivo = "agenda.csv";
        $archivo = fopen($nombreArchivo, "r") or die("No se puede abrir el archivo: $nombreArchivo");
        $datos = array();
     ?>
    <div class="container">
        <h1 class="titulo">C O N T A C T O S</h1>
        <div class="table-responsive">
            <table class="table">
                <!-- Encabezado de tabla-->
                <thead class="thead-dark">
                    <tr id="encabe"><!-- diseño del renglon de encabezado-->
                        <th># de contacto</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Fecha de nacimiento</th>
                        <th>Estado civil</th>
                        <th>Origen</th>
                        <th>Email</th>
                        <th>Redes sociales</th>
                    </tr>
                </thead> <!-- Termina encabezado de tabla -->

                    <!-- cuerpo de la tabla -->
                <tbody>
                    <?php
                        //recorremos la agenda
                        while (($datos = fgetcsv($archivo, 0, ',', '"', '"')) !== false) {
                                //imprimimos el inicio del renglon de tabla HTML
                                print("<tr>");
                                foreach ($datos as $campo) {
                                    //imprimimos el inicio de la celda de datos HTML
                                    print("<td>");
                                    //imprimimos el dato
                                    print("$campo");
                                    //cerramos la celda HTML
                                    print("</td>");
                                }

                             //cerramos el renglon de tabla HTML
                             print("</tr>");
                        }
                    ?>
 
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>