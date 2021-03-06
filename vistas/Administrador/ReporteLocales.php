<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Reporte Locales</title>
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
              crossorigin="anonymous">
    </head>
    <body style="background: url(../../img/dely2.jpg)">
       
        <div class="container">
             </p>
             <a href='../../controladores/controller.php?opcion=consultarLoc' class="btn btn-primary" style="background-color: #E34B1B">Listar Locales</a>
        <a href='../Administrador/administrador.php' class="btn btn-warning">Volver</a>
        </p>
         </div>
<!--       <div>
           <form action="../../controladores/controller.php">
                    <input type="hidden" value="consultarEmple" name="opcion"/>
                    <input type="submit" value="Listar Empeados" class="btn btn-primary" />
                </form>
        </div>
        </p>
        <div>
            <form action="../Administrador/administrador.php">
                    <input type="submit" value="Volver" class="btn btn-primary" />
                </form>
        </div>
        -->
          <div class="container" style="background-color: white">
              <h1>Registro de Locales</h1>
                <table class="table">
                    <thead class="thead-dark">   
                        <tr>
                         <th>Seccion</th>
                         <th>Nombre</th>
                         <th>Direccion</th>
                         <th>Telefono</th>
                         <th>Horario Atencion</th>
                         <th>Correo</th> 
                         <th>Rol</th> 
                         <th>Opciones</th> 
                         <th></th> 
                        </tr>
                    </thead>
                  <tbody>
                <?php
                session_start();
                include_once '../../modelos/Local.php';
                if(isset($_SESSION['listadoloc'])){
                    $listadoloc= unserialize($_SESSION['listadoloc']);
                    foreach ($listadoloc as $fact){
                        echo '<tr>';
                        echo '<td>'.$fact->getSeccion().'</td>';
                        echo '<td>'.$fact->getNombre().'</td>';
                         echo '<td>'.$fact->getDireccion().'</td>';
                        echo '<td>'.$fact->getTelefono().'</td>';
                        echo '<td>'.$fact->getHorario().'</td>';
                        echo '<td>'.$fact->getCorreo().'</td>';
                        echo '<td>'.$fact->getRol().'</td>';
                        echo "<td><a href='../../controladores/controller.php?opcion=eliminarRep&correo="  . $fact->getCorreo() . "' class='btn btn-danger'>eliminar</a></td>";
                        echo "<td><a href='../../controladores/controller.php?opcion=cargarRep&correo=" . $fact->getCorreo() . "' class='btn btn-success'>actualizar</a></td>";
                        echo "</tr>";
                        
                    }
                }
                ?>
                  </tbody>
                </table>
          </div>
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
crossorigin="anonymous"></script>

    </body>
</html>
