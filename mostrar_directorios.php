<?php
    $lista = null;
    $directorio = opendir("./Lista/");
    
    while($elemento = readdir($directorio)){
        if($elemento != "." && $elemento != ".."){
            if(is_dir("./Lista/".$elemento)){
                $lista .= "
                <tr>
                    <td>$elemento</strong></center></td>
                    <td><a href='./Notas/notas.php?directorio=$elemento'>Abrir directorio</a></center></td>
                </tr>";
            }
        }
    }
            
?>