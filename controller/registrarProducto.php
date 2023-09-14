<?php
   
    require_once("../model/conexion.php");
    require_once("../model/consultas.php");
    
    $IdProducto = $_POST['IdProducto'];
    $Nombre = $_POST['nombre'];
    $Marca = $_POST['marca'];
    $Lote = $_POST['lote'];
    $Descripcion= $_POST['descripcion'];
    $Peso = $_POST['peso'];
    $PrecioUnitario = $_POST['precioUnitario'];
    $PrecioPorMayor = $_POST['precioPorMayor'];
   

        $objConsultas = new consultas();
        $result = $objConsultas->registrarProducto($IdProducto,$Nombre,$Marca,$Lote,$Descripcion,$Peso,$PrecioUnitario,$PrecioPorMayor);
                
    
        echo '<script>alert("Registro exitoso")</script>';
        echo "<script> location.href='../view/admin/productos/registrarProducto.php' </script>";
    

?>