<?php
    function cargarVentas(){

        $objConsultas = new consultas();
        $result = $objConsultas->mostrarVentas();

     if (!isset($result)) {
            echo '<h2>NO HAY VENTAS REGISTRADAS</h2>';
        }else{

            foreach($result as $f){
                echo '
                
                <tr>
                    <td>'.$f['IdVentas'].'</td>
                    <td>'.$f['Fecha'].' </td>
                    <td>'.$f['Hora'].'</td>
                    <td>'.$f['VenIdProducto'].'</td>
                    <td>'.$f['CostoTotal'].'</td>
                    
                    <td> <a href="modificarVentas.php?Id_Ventas='.$f['IdVentas'].'" class="btn btn-primary">Editar</a> </td>
                    <td> <a href="../../controller/eliminarVentas.php?Id_Ventas='.$f['IdVentas'].'" class="btn btn-danger">Eliminar</a> </td>
                </tr>                           
                
                ';
            }
        }

    }

    function mostrarVentas(){

        $Id_Ventas= $_GET['Id_Ventas'];
        $objConsultas = new consultas();
        $result = $objConsultas->mostrarVentas($Id_Ventas);
    
        // buscando la informacion del usuario
        // pintar la informacion en el formulario

        foreach ($result as $f){

           echo '
           
           <form action="../../controller/modificarVentas.php" method="POST">
           <div class="row">
           <div class="form-group col-md-4">
           <label>IdVentas</label>
           <input type="number" readonly="readonly" value="'.$f['IdVentas'].'" name="IdVentas" required class="form-control" placeholder="ej: 787787856">
           </div>
           <div class="form-group col-md-4">
          <label>Fecha</label>
          <input type="date" value="'.$f['Fecha'].'" name="Fecha" required class="form-control" placeholder="Ej: dia/mes/año">
          </div>
          <div class="form-group col-md-4">
          <label>Hora</label>
          <input type="time" value="'.$f['Hora'].'" name="Hora" required class="form-control" placeholder="Ej: -:-">
          </div>
          <div class="form-group col-md-4">
          <label>VenIdProducto</label>
          <input type="number" value="'.$f['VenIdProducto'].'" name="VenIdProductos" required class="form-control" placeholder="Ej: 433564">
          </div>
          <div class="form-group col-md-4">
          <label>CostoTotal</label>
          <input type="number" value="'.$f['CostoTotal'].'" name="CostoTotal" required class="form-control" placeholder="Ej: 40.000">
          </div>
         
          
           
           </div>
           <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Modificar Producto</button>

           </form>

           ';


        }
            
    }

    ?>