<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ventas</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="../dashboard/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../dashboard/css/lib/helper.css" rel="stylesheet">
    <link href="../dashboard/css/style.css" rel="stylesheet">
</head>

<body class="bg-success">

    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="index.html"><span>Ventas</span></a>
                        </div>
                        <div class="login-form">
                            <h4>registrar Ventas </h4>
                            <form action="../../controller/registrarVentas.php" method="POST">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>IdVentas</label>
                                        <input type="number" name="Idventas" required class="form-control" placeholder="Ej:1">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Fecha</label>
                                        <input type="date" name="Fecha" required class="form-control" placeholder="Fecha ">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Hora</label>
                                        <input type="time" name="Hora" required class="form-control" placeholder="Hora">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>VenIdProducto</label>
                                        <input type="number" name="VenIdProducto" required class="form-control" placeholder="Ej: 3224335467">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>CostoTotal</label>
                                        <input type="number" name="CostoTotal" required class="form-control" placeholder="Ej: 3224335467">
                                    </div>
                                   

                                </div>
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Registrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>