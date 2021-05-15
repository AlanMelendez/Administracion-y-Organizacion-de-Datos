<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos.css">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="titulo">Agregar Peliculas</h2>
        <form action="peliculas.php" method="POST">
        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" class="formcontrol" placeholder="Escribe el título" id="titulo" name="titulo" required>
            </div>
            <!-- Campo año -->
            <div class="form-group">
                <label for="agno">Año de aparición</label>
                <select class="form-control" id="agno" name="agno" required>
                    <?php
                        for($i=1930;$i<2020;$i++){
                            echo "<option>$i</option>";
                        }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="genero">Género</label>
                <select class="form-control" id="genero" name="genero" required>
                    <option>Acción</option>
                    <option>Comedia</option>
                    <option>Drama</option>
                    <option>Infantil</option>
                    <option>Terror</option>
                    <option>Documental</option>
                    <option>Anime</option>
                    <option>Si-Fi</option>
                </select>
            </div>
            <div class="form-group">
                <label for="clasificacion">Clasificación</label>
                <select class="formcontrol" id="clasificacion" name="clasificacion" required>
                    <option>A</option>
                    <option>AA</option>
                    <option>B</option>
                    <option>B15</option>
                    <option>R</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min
    .js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>