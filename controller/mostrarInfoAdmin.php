<?php
    function cargarUsers(){

        $objConsultas = new consultas();
        $result = $objConsultas->mostrarUsers();

        if (!isset($result)) {
            echo '<h2>NO HAY USUARIOS REGISTRADOS</h2>';
        }else{

            foreach($result as $f){
                echo '
                
                <tr>
                    <td><img src="../'.$f['foto'].'" width="60px"></td>
                    <td>'.$f['identificacion'].'</td>
                    <td>'.$f['nombres'].' </td>
                    <td>'.$f['apellidos'].'</td>
                    <td>'.$f['rol'].'</td>
                    <td>'.$f['email'].'</td>
                    <td>'.$f['telefono'].'</td>
                    <td>'.$f['estado'].'</td>
                    <td> <a href="modificarUser.php?id_user='.$f['identificacion'].'" class="btn btn-primary">Editar</a> </td>
                    <td> <a href="../../controller/eliminarUserAdmin.php?id_user='.$f['identificacion'].'" class="btn btn-danger">Eliminar</a> </td>
                </tr>                           
                
                ';
            }


        }

    }

    function cargarUser(){
        $id_user = $_GET['id_user'];

        $objConsultas = new consultas();
        $result = $objConsultas->mostrarUserAdmin($id_user);

        // Buscando la información del usuario

        //Pintar la info en el formulario

        foreach ($result as $f) {

            echo '

            <form action="../../controller/modificarUserAdmin.php" method="POST">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label>Identificación</label>
                        <input type="number" readonly="readonly" value="'.$f['identificacion'].'" name="identificacion" required class="form-control" placeholder="Ej: 24721343">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Nombres</label>
                        <input type="text" value="'.$f['nombres'].'" name="nombres" required class="form-control" placeholder="Ej: Maria Camila">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Apellidos</label>
                        <input type="text" value="'.$f['apellidos'].'" name="apellidos" required class="form-control" placeholder="Ej: Perez Gaitan">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Email</label>
                        <input type="email" value="'.$f['email'].'" name="email" required class="form-control" placeholder="Ej: mariac@gmail.com">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Teléfono</label>
                        <input type="number" value="'.$f['telefono'].'" name="telefono" required class="form-control" placeholder="Ej: 3224335467">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Género</label>
                        <input type="text" value="'.$f['genero'].'" name="genero" required class="form-control" placeholder="Ej: Femenino">
                    </div>


                    <div class="form-group col-md-4">
                        <label>Rol</label>
                        <select name="rol" id="" class="form-control">
                            <option value="'.$f['rol'].'">'.$f['rol'].'</option>
                            <option value="Administrador">Administrador</option>
                            <option value="Cliente">Cliente</option>
                            <option value="Vendedor">Vendedor</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Estado</label>
                        <select name="estado" id="" class="form-control">
                            <option value="'.$f['estado'].'">'.$f['estado'].'</option>
                            <option value="Activo">Activo</option>
                            <option value="Bloqueado">Bloqueado</option>
                            <option value="Pendiente">Pendiente</option>
                        </select>
                    </div>


                </div>
                
                
                
                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Modificar Usuario</button>
                
                
            </form>
            
            
            
            ';
            
        }

    }


?>