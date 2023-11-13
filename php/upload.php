<?php
    $filename = $_FILES['file']['name'];//Obtiene el nombre del archivo
    $tmp_name = $_FILES['file']['tmp_name'];//Obtiene el temp_name del archivo
    $file_up_name = time() . $filename;//Hace dinamico el nombre del archivo añadiendo la hora antes del nombre
    move_uploaded_file($tmp_name, "files/" . $file_up_name); //Mueve el archivo al folder files con el nombre dinamico
?>