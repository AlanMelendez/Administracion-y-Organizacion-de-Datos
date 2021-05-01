<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</head>
<body>
    
    <div class="container">
        <h1 class="titulo">A G E N D A</h1>
        <form action="wagenda.php" method="POST">

            <div class="form-group">
                 <label for="nombre">Nombre</label>
                 <input type="text" class="formcontrol" placeholder="Escribe tu nombre" id="nombre" name="nombre" required>
                 
            </div>

            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" class="formcontrol" placeholder="Escribe tus apellidos" id="apellidos" name="apellidos" required>
            </div>

            <div class="form-group">
                <label for="fnacimiento">Fecha de nacimiento</label>
                <input type="date" class="formcontrol" id="fnacimiento" name="fnacimiento" required>
            </div>

            <div class="form-group">
                <label for="estadocivil">Estado civil</label>
                <select class="formcontrol" id="estadocivil" name="estadocivil" required>
                    <option>Soltero</option>
                    <option>Casado</option>
                    <option>Divorciado</option>
                    <option>Viudo</option>
                    <option>Unión Libre</option>
                </select>
            </div>

            <div class="form-group">
                <label for="origen">Origen</label>
                <input list="origenes" id="origen" name="origen" class="formcontrol" placeholder="Escribe el municipio de origen" required>
                <datalist id="origenes">
                    <option value="Gómez Palacio">
                    <option value="Lerdo">
                    <option value="Torreón">
                    <option value="Matamoros">
                    <option value="Tlahualilo">
                    <option value="Santa Clara">
                </datalist>
            </div>

            <div class="form-group">
                <label for="correo">Correo electrónico</label>
                <input type="email" class="formcontrol" id="correo" name="correo" placeholder="you@example.com" required>
            </div>

            <div class="form-group">
                <label for="redess">Redes Sociales</label>
                <input type="text" id="redess" name="redess" class="formcontrol" placeholder="Escribe tus redes sociales separados por comas">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>  
        </form>
        <br>
        <form>
            <button type="submit" class="btn btn-primary" id="botonagenda"> 
                <a href="./contactos.php" id="Agendabtn">Agenda</a>
            </button>
        </form>
    </div>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.
    js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>