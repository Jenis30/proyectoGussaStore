<?php
    // IMPORTAMOS LAS DEPENDENCIAS NECESARIAS
    require_once("../model/conexion.php");
    require_once("../model/consultas.php");
    // capturamos en variables, los valores enviados desde el formulario
    // a traves del method post y los name de los campos

    $IdVentas = $_POST['IdVentas'];
    $Fecha = $_POST['Fecha'];
    $Hora = $_POST['Hora'];
    $VenIdProducto = $_POST['VenIdProducto'];
    $CostoTotal= $_POST['CostoTotal'];
   
        $objConsultas = new consultas();
        $result = $objConsultas->actualizarVentas($IdVentas,$Fecha,$Hora,$VenIdProducto,$CostoTotal);

?>