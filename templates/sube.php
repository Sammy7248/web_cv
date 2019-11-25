<?php

    $nombre = $_FILES['file_cv']['name'];
    $guardado = $_FILES['file_cv']['tmp_name'];

    if(!file_exists('archivos')){
        mkdir('archivos',0777,true);
        if(file_exists('archivos')){
            if(move_uploaded_file($guardado, 'archivos/'.$nombre)){
                echo "archivo guardado";
            }
            else{
                echo "No guardado";
            }
        }
        else{
            if(move_uploaded_file($guardado, 'archivos/'.$nombre)){
                echo "archivo guardado";
            }
            else{
                echo "No guardado";
            }
        }
    }

?>