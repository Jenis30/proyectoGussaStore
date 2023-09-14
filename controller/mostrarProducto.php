<?php
    function cargarProducto(){

        $objConsultas = new consultas();
        $result = $objConsultas->mostrarProductos();

     if (!isset($result)) {
            echo '<h2>NO HAY PRODUCTOS REGISTRADOS</h2>';
        }else{

            foreach($result as $f){
                echo '
                
                <tr>
                    <td>'.$f['IdProducto'].'</td>
                    <td>'.$f['Nombre'].' </td>
                    <td>'.$f['Marca'].'</td>
                    <td>'.$f['Descripcion'].'</td>
                    <td>'.$f['Lote'].'</td>
                    <td>'.$f['Peso'].'</td>
                    <td>'.$f['PrecioUnitario'].'</td>
                    <td>'.$f['PrecioPorMayor'].'</td>
                    <td> <a href="modificarProducto.php?Id_Producto='.$f['IdProducto'].'" class="btn btn-primary">Editar</a> </td>
                    <td> <a href="../../controller/eliminarproducto.php?Id_Producto='.$f['IdProducto'].'" class="btn btn-danger">Eliminar</a> </td>
                </tr>                           
                
                ';
            }
        }

    }

    function mostrarProducto(){

        $Id_Producto= $_GET['Id_Producto'];
        $objConsultas = new consultas();
        $result = $objConsultas->mostrarProducto($Id_Producto);
    
        // buscando la informacion del usuario
        // pintar la informacion en el formulario

        foreach ($result as $f){

           echo '
           
           <form action="../../controller/modificarProducto.php" method="POST">
           <div class="row">
           <div class="form-group col-md-4">
           <label>IdProducto</label>
           <input type="number" readonly="readonly" value="'.$f['IdProducto'].'" name="IdProducto" required class="form-control" placeholder="ej: 787787856">
           </div>
           <div class="form-group col-md-4">
          <label>Nombre</label>
          <input type="text" value="'.$f['Nombre'].'" name="Nombre" required class="form-control" placeholder="Ej: Jennys">
          </div>
          <div class="form-group col-md-4">
          <label>Marca</label>
          <input type="text" value="'.$f['Marca'].'" name="Marca" required class="form-control" placeholder="Ej: Sensacion">
          </div>
          <div class="form-group col-md-4">
          <label>Descripcion</label>
          <input type="text" value="'.$f['Descripcion'].'" name="Descripcion" required class="form-control" placeholder="Ej: Descripcion">
          </div>
          <div class="form-group col-md-4">
          <label>Lote</label>
          <input type="number" value="'.$f['Lote'].'" name="Lote" required class="form-control" placeholder="Ej: Lote">
          </div>
          <div class="form-group col-md-4">
          <label>Peso</label>
          <input type="Number" value="'.$f['Peso'].'" name="Peso" required class="form-control" placeholder="Ej: Peso">
          </div>
          <div class="form-group col-md-4">
          <label>PrecioUnitario</label>
          <input type="Number" value="'.$f['PrecioUnitario'].'" name="PrecioUnitario" required class="form-control" placeholder="Ej: Precio">
          </div>
          <div class="form-group col-md-4">
          <label>PrecioPorMayor</label>
          <input type="Number" value="'.$f['PrecioPorMayor'].'" name="PrecioPorMayor" required class="form-control" placeholder="Ej: Precio">
          </div>
          
           
           </div>
           <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Modificar Producto</button>

           </form>

           ';


        }
            
    }

    ?>