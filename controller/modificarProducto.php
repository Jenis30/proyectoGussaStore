<?php
    // IMPORTAMOS LAS DEPENDENCIAS NECESARIAS
    require_once("../model/conexion.php");
    require_once("../model/consultas.php");
    // capturamos en variables, los valores enviados desde el formulario
    // a traves del method post y los name de los campos

    $IdProducto = $_POST['IdProducto'];
    $Nombre = $_POST['Nombre'];
    $Marca = $_POST['Marca'];
    $Lote = $_POST['Lote'];
    $Descripcion= $_POST['Descripcion'];
    $Peso = $_POST['Peso'];
    $PrecioUnitario = $_POST['PrecioUnitario'];
    $PrecioPorMayor = $_POST['PrecioPorMayor'];
   

    
        $objConsultas = new consultas();
        $result = $objConsultas->actualizarProducto($IdProducto,$Nombre,$Marca,$Lote,$Descripcion,$Peso,$PrecioUnitario,$PrecioPorMayor);

?>