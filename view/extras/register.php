<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin: Widget</title>

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

<body class="bg-primaryss">

    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content">
                        <div class="login-logo">
                            
                        </div>
                        <div class="login-formss">
                            <h4>Registrar Usuario</h4>
                            <form action="../../controller/registrarUserE.php" method="POST">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Identificación</label>
                                        <input type="number" name="identificacion" required class="form-control" placeholder="Ej: 24721343">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Nombres</label>
                                        <input type="text" name="nombres" required class="form-control" placeholder="Ej: Maria Camila">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Apellidos</label>
                                        <input type="text" name="apellidos" required class="form-control" placeholder="Ej: Perez Gaitan">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <input type="email" name="email" required class="form-control" placeholder="Ej: mariac@gmail.com">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Teléfono</label>
                                        <input type="number" name="telefono" required class="form-control" placeholder="Ej: 3224335467">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Género</label>
                                        <input type="text" name="genero" required class="form-control" placeholder="Ej: Femenino">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Clave</label>
                                        <input type="password" name="claveA" required class="form-control" placeholder="*******">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Confirmar Clave</label>
                                        <input type="password" name="claveB" required class="form-control" placeholder="********">
                                    </div>
                                </div>
                                
                               
                                <div class="checkbox">
                                    <label>
										<input type="checkbox"> Acepta términos y condiciones 
									</label>
                                </div>
                                <button type="submit" class="btnss btn-primaryss btn-flatss m-b-30ss m-t-30ss">Registrarme</button>
                                
                                <div class="register-link m-t-15 text-center">
                                    <p>Ya estas registrado ? <a href="login.php"> Inicia sesión aquí</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>