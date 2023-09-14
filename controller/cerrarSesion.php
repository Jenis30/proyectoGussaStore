<?php

    require_once("../model/conexion.php");
    require_once("../model/validarSesion.php");

    $objConsultas = new validarSesion();
    $result = $objConsultas->cerrarSesion();

?>