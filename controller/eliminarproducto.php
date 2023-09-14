<?php

    require_once("../model/conexion.php");
    require_once("../model/consultas.php");

    $Id_Producto= $_GET['Id_Producto'];

    $objConsultas = new consultas();
    $result = $objConsultas->eliminarproducto($Id_Producto);
?>