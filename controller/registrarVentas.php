<?php
   
    require_once("../model/conexion.php");
    require_once("../model/consultas.php");
    
    $IdVentas = $_POST['Idventas'];
    $Fecha = $_POST['Fecha'];
    $Hora = $_POST['Hora'];
    $VenIdProducto= $_POST['VenIdProducto'];
    $CostoTotal= $_POST['CostoTotal'];
   
   

    
        $objConsultas = new consultas();
        $result = $objConsultas->registrarVentas($IdVentas,$Fecha,$Hora,$VenIdProducto,$CostoTotal);
                
    
        echo '<script>alert("Registro exitoso")</script>';
        echo "<script> location.href='../view/admin/registrarVentas.php' </script>";
    

?>