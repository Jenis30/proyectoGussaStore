<?php
    // IMPORTAMOS LAS DEPENDENCIAS NECESARIAS
    require_once("../model/conexion.php");
    require_once("../model/consultas.php");
    // capturamos en variables, los valores enviados desde el formulario
    // a traves del method post y los name de los campos
    $identificacion = $_POST['identificacion'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $genero = $_POST['genero'];
    $claveMd = md5($_POST['identificacion']);
    $rol = $_POST['rol'];
    $estado = $_POST['estado'];

    // DEFINIR EL PESO LIMITE Y LOS FORMATOS 
    define('LIMITE',2000);
    define('ARREGLO', serialize(array('image/jpg', 'image/png', 'image/jpeg' , 'image/gif')));
    $PERMITIDOS = unserialize(ARREGLO);

    if ($_FILES['foto']['error']>0) {
        echo '<script>alert("Error archivo dañado")</script>';
        echo "<script> location.href='../view/admin/registrarUser.php' </script>";
    }
    else{

        if (in_array($_FILES['foto']['type'], $PERMITIDOS) && $_FILES['foto']['size']<= LIMITE * 1024) {

            $foto = "../upload/usuarios/".$_FILES['foto']['name'];

            $resultado = move_uploaded_file($_FILES['foto']['tmp_name'], $foto);

        }else{
            echo '<script>alert("La imagen seleccionada super el peso o incumple con el formato")</script>';
           echo "<script> location.href='../view/admin/registrarUser.php' </script>";
    
        }
    }

        
        // Creamos el objeto a partir de la clase consultas
        $objConsultas = new consultas();
        $result = $objConsultas->registrarUserAdmin($identificacion,$nombres,$apellidos,$email,$telefono,$genero,$claveMd,$rol,$estado, $foto);
                
 
?>