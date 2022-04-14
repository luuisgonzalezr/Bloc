<?php 

if(isset($_POST['nombreNota']) && isset($_POST['contenidoNota'])){



    $directorio = $_GET['directorio'];
    $nombreNota = $_POST['nombreNota'] . ".txt";
    $contenidoNota = $_POST['contenidoNota'];

    $myfile = @fopen("../Lista/$directorio/" . $nombreNota . "", "w+") or die("Unable to open file!");
        if(file_exists("../Lista/$directorio/" . $nombreNota)){
            fwrite($myfile, $contenidoNota);
            echo "Nota creada!";
        }else{
            die("No se ha podido crear el archivo."); 
        }
        fclose($myfile);
}else{
    echo "Error al crear la nota";
}
/*
$directorio = $_GET['directorio'];
$nombreNota = $_POST['nombreNota'] . ".txt";
$contenidoNota = $_POST['contenidoNota'];

if(file_exists("../Lista".$directorio."/".$nombreNota)){
    $response = 0;
    exit;
}else{
    $nota = fopen($nombreNota,"w") or die ("No se pudo crear el archivo");
    fwrite($nota,$contenidoNota);
    fclose($nota);
}
*/


?>