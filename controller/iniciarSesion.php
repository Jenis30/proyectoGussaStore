<?php
    // invocamos las dependencias necesarias

    require_once("../model/conexion.php");
    require_once("../model/validarSesion.php");

    // aterrizamos los valores enviados desde el formulario

    $email = $_POST['email'];
    $clave = md5($_POST['clave']);

    $objetoSesion = new validarSesion();
    $result = $objetoSesion->iniciarSesion($email, $clave);


?>
 