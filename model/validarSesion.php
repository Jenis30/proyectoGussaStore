<?php

    class validarSesion{
        public function iniciarSesion($email, $clave){
            // conectamos con la base de datos
            $objetoConexion = new conexion();
            $conexion = $objetoConexion->get_conexion();
            // Consultamos todos los datos del usario a partir de su correo
            $consultar = "SELECT * FROM users WHERE email=:email";
            $result= $conexion->prepare($consultar);
            $result->bindParam(":email", $email);
            $result->execute();
            // Validamos el correo
            if ($f = $result->fetch()) {
                // validamos la clave
                if ($clave == $f['clave']) {
                    // validamos el estado de la cuenta
                    if ($f['estado'] == "Activo") {
                        // Se inicia sesión
                        session_start();
                        $_SESSION['id'] = $f['identificacion'];
                        $_SESSION['email'] = $f['email'];
                        $_SESSION['rol'] = $f['rol'];
                        $_SESSION['clave'] = $f['clave'];

                        $_SESSION['autenticado'] = "SI";

                        // Validamos el rol para redireccionar a la interfaz correspondiente.
                        if ($f['rol'] == "Administrador") {
                            echo '<script>alert("Bienvenido Usuario Administrador")</script>';
                            echo "<script> location.href='../view/admin/home.php'</script>";
                        }

                        if ($f['rol'] == "Cliente") {
                            echo '<script>alert("Bienvenido Cliente")</script>';
                            echo "<script> location.href='../index.html#productos'</script>";
                        }

                    }else{
                        echo '<script>alert("Su cuenta esta inactiva. Verifique los datos o contacte al Admin.")</script>';
                        echo "<script> location.href='../view/extras/login.php' </script>";
                    }

                    
                }else{
                    echo '<script>alert("Clave incorrecta. Verifique los datos o registrese.")</script>';
                    echo "<script> location.href='../view/extras/login.php' </script>";
                }
                
            }else{
                echo '<script>alert("El Email ingresado no se encuentra en la base de datos. Verifique los datos o registrese.")</script>';
                echo "<script> location.href='../view/extras/login.php' </script>";
            }

        }
         

        public function cerrarSesion(){
            $objetoConexion = new conexion();
            $conexion = $objetoConexion->get_conexion();

            session_start();
            session_destroy();
            echo "<script> location.href='../index.html'</script>";
        }
    }

?>