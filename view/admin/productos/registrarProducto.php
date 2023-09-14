<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Productos</title>

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
    <link href="../../dashboard/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../../dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../../dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../../dashboard/css/lib/helper.css" rel="stylesheet">
    <link href="../../dashboard/css/style.css" rel="stylesheet">
</head>

<body class="bg-primary">

    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="index.html"><span>Producto</span></a>
                        </div>
                        <div class="login-form">
                            <h4>Registar Producto</h4>
                            <form action="../../../controller/registrarProducto.php" method="POST">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>IdProducto</label>
                                        <input type="number" name="IdProducto" required class="form-control" placeholder="Ej:1">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Nombre</label>
                                        <input type="text" name="nombre" required class="form-control" placeholder="Ej: ">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Marca</label>
                                        <input type="text" name="marca" required class="form-control" placeholder="marca">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Lote</label>
                                        <input type="number" name="lote" required class="form-control" placeholder="Ej: 3224335467">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Descripcion</label>
                                        <input type="text" name="descripcion" required class="form-control" placeholder="Descripcion">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Peso</label>
                                        <input type="number" name="peso" required class="form-control" placeholder="Peso">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>PrecioUnitario</label>
                                        <input type="text" name="precioUnitario" required class="form-control" placeholder="Descripcion">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>PrecioPorMayor</label>
                                        <input type="text" name="precioPorMayor" required class="form-control" placeholder="Descripcion">
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