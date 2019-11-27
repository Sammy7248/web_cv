<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <?php
        require "css.php";
    ?>
    <link rel="stylesheet" type="text/css" href="../../css/admin.css">

</head>

<body>
    <div id="login">
        <form action="validate_user.php" id="login_form" class="form" method="post">
            <img id="log_img" src="../../image/log.png">
            <h2>Iniciar Sesi&oacute;n</h2>
            <div class="input-group">
                <input class="form-control" type="email" placeholder="E-mail" name="username">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            </div>
            <div class="input-group">
                <input class="form-control" type="password" placeholder="Password" id="password" name="password">
                <span class="input-group-addon"><i class="glyphicon glyphicon-eye-open" id="show"></i></span>
            </div>
            <label id="recordarme">Recordarme <input type="checkbox"></label>
            <input class="btn btn-success" type="submit" value="Ingresar" id="ingresar">
            <label id="clear">Limpiar</label>
        </form>
    </div>

    <div id="datatable">

    </div>

    <?php
        require "js.php";
    ?>
    <script type="text/javascript" src="../../js/login.js"></script>
</body>

</html>