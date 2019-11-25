<?php

    require_once "../conexion.php";
    $conect = new conect();
    $conexion = $conect->conectar();
    $email = $_POST['username'];
    $password = $_POST['password'];

    if(isset($_POST['username']) && isset($_POST['password'])){
        $query = "SELECT * FROM SUPERUSER WHERE EMAIL='$email' AND PASSWORD='$password'";
        $consulta = mysqli_query($conexion, $query);
        $rows = mysqli_num_rows($consulta);
        if($rows==1){
            header("Location: ../../templates/index.html");
        }
        else{
            echo "\nOtro algo";
        }

    }
    else{
        echo "No se envia nada en el ajax";
    }
    // $query = "SELECT * FROM SUPERUSER WHERE EMAIL='$email' AND PASSWORD='$password';";
    


?>