<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="../../bootstrap-3/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../../fontawesome/css/all.css">
    <link rel="stylesheet" href="../../datatables/datatables.min.css" type="text/css">
    <link rel="stylesheet" href="../../datatables/DataTables-1.10.18/css/dataTables.bootstrap.min.css" type="text/css">
    <link type="text/css" rel="stylesheet" href="../../toast_/jquery.toast.css">
    <link type="text/css" rel="stylesheet" href="../../select-input/select-input-css/bootstrap-select.css">
    <link rel="stylesheet" type="text/css" href="../../css/admin.css">

</head>

<body>
    <div id="login">
        <form action="validate_user.php" id="login_form" class="form" method="post">
            <img id="log_img" src="../../image/log.png">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="E-mail" name="username">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            </div>
            <div class="input-group">
                <input class="form-control" type="password" placeholder="Password" name="password">
                <span class="input-group-addon"><i class="glyphicon glyphicon-eye-open"></i></span>
            </div>
            <input class="btn btn-success" type="submit" value="Ingresar" id="ingresar">
        </form>
    </div>

    <div id="datatable_">

    </div>


    <script src="../../jquery/jquery-3.3.1.min.js"></script>
    <script src="../../bootstrap-3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../datatables/datatables.min.js" type="text/javascript"></script>
    <script src="../../toast_/jquery.toast.js" type="text/javascript"></script>
    <script type="text/javascript" src="../../select-input/select-input-js/bootstrap-select.js"></script>
    <script type="text/javascript" src="../../js/login.js"></script>
</body>

</html>