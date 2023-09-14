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
    $rol = $_POST['rol'];
    $estado = $_POST['estado'];

        
        // Creamos el objeto a partir de la clase consultas
        $objConsultas = new consultas();
        $result = $objConsultas->actualizarUserAdmin($identificacion,$nombres,$apellidos,$email,$telefono,$genero,$rol,$estado);
                
 
?>