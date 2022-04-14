<?php 
$response = null;
if(isset($_POST['directory'])){
    $directory = $_POST['directory'];
    $path = "./Lista/" . $directory;
    //Verificar si la carpeta ya existe
    if (!is_dir($path)){
        mkdir($path,0777,true);
        $response = 1;
    }else{
        $response = 0;
    }

    echo $response;
}

?>