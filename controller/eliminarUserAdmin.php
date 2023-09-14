<?php

    require_once("../model/conexion.php");
    require_once("../model/consultas.php");

    $id_user= $_GET['id_user'];

    $objConsultas = new consultas();
    $result = $objConsultas->eliminarUserAdmin($id_user);
?>