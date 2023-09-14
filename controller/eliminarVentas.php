<?php

    require_once("../model/conexion.php");
    require_once("../model/consultas.php");

    $Id_Ventas= $_GET['Id_Ventas'];

    $objConsultas = new consultas();
    $result = $objConsultas->eliminarVentas($Id_Ventas);
?>