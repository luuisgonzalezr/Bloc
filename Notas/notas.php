<?php
$directorio = $_GET['directorio'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Directorio</title>
</head>
<body>
    <h1 class="text-center mt-2">Mostrando: <?php echo $directorio?></h1>
    <h3 class="text-center mt-5">Crear una nueva nota</h3>
    <form  class="text-center container mt-3" method="POST" id="form2">
        <div class="mb-3">
            <label for="nombreNota" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombreNota" name="nombreNota">
        </div>
        <div class="mb-3">
            <label for="contenidoNota" class="form-label">Contenido:</label>
            <textarea class="form-control" name="contenidoNota" id="contenidoNota" cols="30" rows="6"></textarea>
        </div>
        <div class="mb-3">
            <input class="btn btn-primary" type="submit" value="Crear" onClick="crearNota();">
        </div>
    </form>
    <h2 class="text-center mt-4">Lista de notas</h2>
    <table class="table-dark table mt-5 container">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
        <?php include "./mostrar_notas.php"?> 

        </tbody>
    </table>

    <a class="btn btn-primary mt-3" href="../index.php">Volver a los directorios</a>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <script>
        function crearNota(){
            console.log($('#form2').serialize());
            $.ajax({
                
                type:'POST',
                url: 'crear_nota.php?directorio=<?php echo $directorio?>',
                data: $('#form2').serialize(),
                success: function (response){
                    alert(response);
                    window.location.reload();
                }
            });
        }
    </script>
</body>
</html>