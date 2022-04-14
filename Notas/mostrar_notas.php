<?php 
$path = '../Lista/'.$directorio;
if ($handle = opendir($path)) {

while (false !== ($entry = readdir($handle))) {

    if ($entry != "." && $entry != "..") {

        echo "<tr><td>$entry</td><td><a href='../Notas/descargar_nota.php?directorio=".$directorio."&file=".$entry."'>Descargar</a></td></tr>";
    }
}

closedir($handle);
}
?>