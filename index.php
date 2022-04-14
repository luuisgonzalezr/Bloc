<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Bloc de notas</title>
</head>
<body class="container">
    <h1 class="text-center mt-2">Lista de directorios</h1>
    <h3>¿Aún no existe?</h3>
    <form method="POST" id="form">
        <label for="directory">Crear directorio</label>
        <input type="text" name="directory" id="directory">
        <input class="btn btn-primary" type="submit" value="Crear" onClick="crearDirectorio();">
    </form>

    <table class="table-dark table mt-5 container">
        <thead>
            <tr>
                <th scope="col">Nombre del directorio</th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
        <?php
                include "./mostrar_directorios.php";
                echo $lista;
            ?>
        </tbody>
    </table>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <script>
        function crearDirectorio(){
            $.ajax({
                type: 'POST',
                url:'crear_directorio.php',
                data:$('#form').serialize(),
                success: function (response){
                    if(response == 1){
                        alert("Directorio creado con éxito. Recargue la pagina.");
                    }else{
                        alert("Error al crear el directorio o ya existe");
                    }
                }
            });
        }
    </script>
</body>
</html>