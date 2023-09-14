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
    $claveA = $_POST['claveA'];
    $claveB = $_POST['claveB'];
    $rol = "Cliente";
    $estado = "Activo";

    // Comparamos que las claves concuerden

    if ($claveA == $claveB) {
        // Encriptamos la contraseña con MD5
        $claveMd = md5($claveA);
        // Creamos el objeto a partir de la clase consultas
        $objConsultas = new consultas();
        $result = $objConsultas->registrarUserExt($identificacion,$nombres,$apellidos,$email,$telefono,$genero,$claveMd,$rol,$estado);
                
    }else{
        echo '<script>alert("Las claves no coinciden, verifique datos")</script>';
        echo "<script> location.href='../view/extras/register.php' </script>";
    }

?>