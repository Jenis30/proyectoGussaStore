<?php

    class consultas{
        // Una clase puede tener y va a tener multiples functions 
        // Registro de usuarios externos (POST)
        public function registrarUserExt($identificacion,$nombres,$apellidos,$email,$telefono,$genero,$claveMd,$rol,$estado){
            //Creamos el objeto de la conexion de la clase conexion
            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();

            $consultar = "SELECT * FROM users WHERE identificacion=:identificacion OR email=:email";
            $result = $conexion->prepare($consultar);

            $result->bindParam(":identificacion", $identificacion);
            $result->bindParam(":email", $email);

            $result->execute();

            $f = $result->fetch();

            if ($f) {
                echo '<script>alert("Estos datos ya se encuentran en el sistema, verifique y vuelva a intentarlo")</script>';
                echo "<script> location.href='../view/extras/register.php' </script>";
            }else{
                // Definimos la consulta de SQL a ejecutar, en este caso un insert
                $insertar = "INSERT INTO users(identificacion, nombres, apellidos, email, telefono, genero, clave, rol, estado) VALUES(:identificacion, :nombres, :apellidos, :email, :telefono, :genero, :claveMd, :rol, :estado)";
                // Preparamos lo necesario para ejecutar $insertar
                $result = $conexion->prepare($insertar);
                // convertimos los argumentos en parametros con bindParam
                $result->bindParam(":identificacion", $identificacion);
                $result->bindParam(":nombres", $nombres);
                $result->bindParam(":apellidos", $apellidos);
                $result->bindParam(":email", $email);
                $result->bindParam(":telefono", $telefono);
                $result->bindParam(":genero", $genero);
                $result->bindParam(":claveMd", $claveMd);
                $result->bindParam(":rol", $rol);
                $result->bindParam(":estado", $estado);
                // Ejecutamos el insert
                $result ->execute();
                // Confirmamos el registro y redireccionamos
                echo '<script>alert("Registro exitoso")</script>';
                echo "<script> location.href='../view/extras/login.php' </script>";
            }
        }

        // FUNCIONES ROL ADMINISTRADOR (POST)
        public function registrarUserAdmin($identificacion,$nombres,$apellidos,$email,$telefono,$genero,$claveMd,$rol,$estado,$foto){
            //Creamos el objeto de la conexion de la clase conexion
            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();

            $consultar = "SELECT * FROM users WHERE identificacion=:identificacion OR email=:email";
            $result = $conexion->prepare($consultar);

            $result->bindParam(":identificacion", $identificacion);
            $result->bindParam(":email", $email);

            $result->execute();

            $f = $result->fetch();

            if ($f) {
                echo '<script>alert("Estos datos ya se encuentran en el sistema, verifique y vuelva a intentarlo")</script>';
                echo "<script> location.href='../view/admin/registrarUser.php' </script>";
            }else{
                // Definimos la consulta de SQL a ejecutar, en este caso un insert
                $insertar = "INSERT INTO users(identificacion, nombres, apellidos, email, telefono, genero, clave, rol, estado, foto) VALUES(:identificacion, :nombres, :apellidos, :email, :telefono, :genero, :claveMd, :rol, :estado, :foto)";
                // Preparamos lo necesario para ejecutar $insertar
                $result = $conexion->prepare($insertar);
                // convertimos los argumentos en parametros con bindParam
                $result->bindParam(":identificacion", $identificacion);
                $result->bindParam(":nombres", $nombres);
                $result->bindParam(":apellidos", $apellidos);
                $result->bindParam(":email", $email);
                $result->bindParam(":telefono", $telefono);
                $result->bindParam(":genero", $genero);
                $result->bindParam(":claveMd", $claveMd);
                $result->bindParam(":rol", $rol);
                $result->bindParam(":estado", $estado);
                $result->bindParam(":foto", $foto);
                // Ejecutamos el insert
                $result ->execute();
                // Confirmamos el registro y redireccionamos
                echo '<script>alert("Registro exitoso")</script>';
                echo "<script> location.href='../view/admin/registrarUser.php' </script>";
            }
        }

        // TRAE TODOS LOS REGISTROS DE LA TABLA USUARIOS DESDE LA BASE DE DATOS (GET)
        public function mostrarUsers(){
            $f = null;

            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();

            $consultar = "SELECT * FROM users";
            $result = $conexion->prepare($consultar);

            $result->execute();

            while ($resultado = $result->fetch()) {
                $f[] = $resultado;
            }
            return $f;

        }

        // ELIMINA EL USUARIO ADMIN MEDIANTE SU ID (DELETE)
        public function eliminarUserAdmin($id_user){
            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();

            $eliminar = "DELETE FROM users WHERE identificacion=:id_user ";
            $result = $conexion->prepare($eliminar);

            $result->bindParam(':id_user', $id_user);

            $result->execute();

            echo '<script>alert("Usuario Eliminado")</script>';
            echo "<script> location.href='../view/admin/verUsers.php' </script>";

        }

        // TRAE EL USUARIO ADMIN POR ID DE LA TABLA USUARIOS DESDE LA BASE DE DATOS (GET)
        public function mostrarUserAdmin($id_user){
            $f = null;

            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();

            $buscar = "SELECT * FROM users WHERE identificacion=:id_user";
            $result= $conexion->prepare($buscar);

            $result->bindParam(':id_user', $id_user);
            $result->execute();

            while ($resultado = $result->fetch()) {
                $f[] = $resultado;
            }
            return $f;
        }

        // ACTUALIZA LOS DATOS DEL USER ADMIN MEDIANTE SU ID EN LA BASE DE DATOS(PUT)
        public function actualizarUserAdmin($identificacion,$nombres,$apellidos,$email,$telefono,$genero,$rol,$estado){
            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();

            $actualizar = "UPDATE users SET nombres=:nombres, apellidos=:apellidos, email=:email, telefono=:telefono, genero=:genero, rol=:rol, estado=:estado   WHERE identificacion=:identificacion";
            $result = $conexion->prepare($actualizar);

                $result->bindParam(":identificacion", $identificacion);
                $result->bindParam(":nombres", $nombres);
                $result->bindParam(":apellidos", $apellidos);
                $result->bindParam(":email", $email);
                $result->bindParam(":telefono", $telefono);
                $result->bindParam(":genero", $genero);
                $result->bindParam(":rol", $rol);
                $result->bindParam(":estado", $estado);

                $result->execute();
                echo '<script>alert("Usuario Actualizado")</script>';
                echo "<script> location.href='../view/admin/verUsers.php' </script>";
        }
        


        // FUNCIONES ROL AUXILIAR PRODUCTO


        

        public function registrarProducto($IdProducto,$Nombre,$Marca,$Lote,$Descripcion,$Peso,$PrecioUnitario,$PrecioPorMayor){
            $objconexion = new conexion();
            $conexion = $objconexion-> get_conexion();
    
            $consultar = "SELECT * FROM Producto WHERE IdProducto=:IdProducto";
            $result = $conexion->prepare($consultar);
    
            $result->bindparam(":IdProducto",$IdProducto);
            
    
            $result->execute();
            $f = $result->fetch();
    
            if ($f){
                echo '<script>alert("Estos productos ya se encuentran en el sistema por favor verificar")</script>';
                echo "<script> location.href='../view/admin/productos/registrarProducto.php' </script>";
            }else{
                $insertar = "INSERT INTO Producto(IdProducto, Nombre, Marca, Lote, Descripcion, Peso, PrecioUnitario, PrecioPorMayor)VALUES(:IdProducto, :Nombre, :Marca, :Lote, :Descripcion, :Peso, :PrecioUnitario, :PrecioPorMayor)";
    
                $result = $conexion->prepare($insertar);
    
                $result->bindParam(":IdProducto", $IdProducto);
                    $result->bindParam(":Nombre", $Nombre);
                    $result->bindParam(":Marca", $Marca);
                    $result->bindParam(":Lote", $Lote);
                    $result->bindParam(":Descripcion", $Descripcion);
                    $result->bindParam(":Peso", $Peso);
                    $result->bindParam(":PrecioUnitario", $PrecioUnitario);
                    $result->bindParam(":PrecioPorMayor", $PrecioPorMayor);
                   
                   
                    
                    $result-> execute();
                    echo '<script>alert("Productos registrados")</script>';
                    echo "<script> location.href='../view/admin/productos/registrarProducto.php' </script>";
         } 

        }

        public function mostrarProductos(){
            $f = null;

            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();

            $consultar = "SELECT * FROM producto";
            $result = $conexion->prepare($consultar);

            $result->execute();

            while ($resultado = $result->fetch()) {
                $f[] = $resultado;
            }
            return $f;

        }

         public function mostrarProducto($Id_Producto){
            $f = null;
        
            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();
        
            $consultar = "SELECT * FROM producto WHERE IdProducto=:Id_Producto";

            $result = $conexion->prepare($consultar);
            $result->bindParam(':Id_Producto', $Id_Producto);
        
            $result->execute();
        
            while ($resultado = $result->fetch()) {
                $f[] = $resultado;
            }
            return $f;
        
        }




        public function eliminarProducto($Id_Producto){
            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();
        
            $eliminar = "DELETE FROM Producto WHERE IdProducto=:Id_Producto ";
            $result = $conexion->prepare($eliminar);
        
            $result->bindParam(':Id_Producto', $Id_Producto);
        
            $result->execute();
        
            echo '<script>alert("Producto Eliminado")</script>';
            echo "<script> location.href='../view/admin/verProductos.php' </script>";
        
        }



        public function actualizarProducto($IdProducto,$Nombre,$Marca,$Lote,$Descripcion,$Peso,$PrecioUnitario,$PrecioPorMayor){
            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();
        
            $actualizar = "UPDATE Producto SET IdProducto=IdProducto, Nombre=:Nombre, Marca=:Marca, Lote=:Lote, Descripcion=:Descripcion, Peso=:Peso, PrecioUnitario=:PrecioUnitario, PrecioPorMayor=:PrecioPorMayor   WHERE IdProducto=:IdProducto";
            $result = $conexion->prepare($actualizar);
        
            $result->bindParam(":IdProducto", $IdProducto);
            $result->bindParam(":Nombre", $Nombre);
            $result->bindParam(":Marca", $Marca);
            $result->bindParam(":Lote", $Lote);
            $result->bindParam(":Descripcion", $Descripcion);
            $result->bindParam(":Peso", $Peso);
            $result->bindParam(":PrecioUnitario", $PrecioUnitario);
            $result->bindParam(":PrecioPorMayor", $PrecioPorMayor);
            
        
                $result->execute();
                echo '<script>alert("Producto actualizado")</script>';
                echo "<script> location.href='../view/admin/verProductos.php' </script>";
        
            } 
            
            
            
            // FUNCIONES ROL VENTAS



        public function registrarVentas($IdVentas,$Fecha,$Hora,$VenIdProducto,$CostoTotal){
            $objconexion = new conexion();
            $conexion = $objconexion-> get_conexion();
    
            $consultar = "SELECT * FROM Ventas WHERE IdVentas=:IdVentas";
            $result = $conexion->prepare($consultar);
    
            $result->bindparam(":IdVentas",$IdVentas);
            
    
            $result->execute();
            $f = $result->fetch();
    
            if ($f){
                echo '<script>alert("Esta venta ya se encuentran en el sistema por favor verificar")</script>';
                echo "<script> location.href='../view/admin/registrarVentas.php' </script>";
            }else{
                $insertar = "INSERT INTO Ventas(IdVentas, Fecha, Hora, VenIdProducto, CostoTotal)VALUES(:IdVentas, :Fecha, :Hora, :VenIdProducto, :CostoTotal)";
    
                $result = $conexion->prepare($insertar);
    
            $result->bindParam(":IdVentas", $IdVentas);
            $result->bindParam(":Fecha", $Fecha);
            $result->bindParam(":Hora", $Hora);
            $result->bindParam(":VenIdProducto", $VenIdProducto);
            $result->bindParam(":CostoTotal", $CostoTotal);
                    
                   
                   
                    
                    $result-> execute();
                    echo '<script>alert("Venta Registrada")</script>';
                    echo "<script> location.href='../view/admin/registrarVentas.php' </script>";
         } 

        }

          public function mostrarVentas(){
             $f = null;
        
            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();
        
            $consultar = "SELECT * FROM Ventas";
            $result = $conexion->prepare($consultar);
        
            $result->execute();
        
            while ($resultado = $result->fetch()) {
                $f[] = $resultado;
            }
            return $f;
        
        }




        public function eliminarVentas($Id_Ventas){
            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();
        
            $eliminar = "DELETE FROM Ventas WHERE IdVentas=:Id_Ventas ";
            $result = $conexion->prepare($eliminar);
        
            $result->bindParam(':Id_Ventas', $Id_Ventas);
        
            $result->execute();
        
            echo '<script>alert("Venta Eliminada")</script>';
            echo "<script> location.href='../view/admin/verVentas.php' </script>";
        
        }


        

        public function actualizarVentas($IdVentas,$Fecha,$Hora,$VenIdProducto,$CostoTotal){
            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();
        
            $actualizar = "UPDATE Ventas SET IdVentas=IdVentas, Fecha=:Fecha, Hora=:Hora, VenIdProducto=:VenIdProducto, CostoTotal=:CostoTotal  WHERE IdVentas=:IdVentas";
            $result = $conexion->prepare($actualizar);
        
                    $result->bindParam(":IdVentas", $IdVentas);
                    $result->bindParam(":Fecha", $Fecha);
                    $result->bindParam(":Hora", $Hora);
                    $result->bindParam(":VenIdProducto", $VenIdProducto);
                    $result->bindParam(":CostoTotal", $CostoTotal);
        
                $result->execute();
                echo '<script>alert("Venta actualizada")</script>';
                echo "<script> location.href='../view/admin/verVentas.php' </script>";
         }




        
        
 }
      
        


        //   // FUNCIONES ROL VENTAS

        



        // // FUNCIONES ROL CLIENTE




        
    
    

?>