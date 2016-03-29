<!DOCTYPE html>
<html lang="es">
  <head>
     <?php
      include('main.inc.php');
      $contenido='';
      if($statusConexion==true){
      	   $contenido=consultaUsuario($conex);
      }
     ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Formulario de usuario</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../jquery-ui-1.11.4.custom/jquery-ui.structure.min.css" rel="stylesheet">
    <link href="../css/estilo.css" rel="stylesheet">

    <!--JQuery -->
    <script type="text/JavaScript" src="../js/jquery-1.12.0.js"></script>
    <script type="text/JavaScript" src="../jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    <script type="text/JavaScript" src="../js/funciones.js"></script> 
    
  </head>
  <body>
    
    <div id="general" class="center">
         <header>
            <h2> Formulario de usuario</h2>
         </header>

         <div id="agregar" tabindex="-1" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hiden="true" align="center">

              <div class="modal-content">

              <div class="modal-header">
                   <button type="button" class="close" data-dismiss="Modal" aria-hidden="true">&times;</button>
              </div>

             <form name="frm_user" action="" method="POST">
                 <label for="nombre">Nombre</label>
                 <input type="text" name="nombre" id="nombre" placeholder="Ingresa tu nombre" required/>
                  <label for="apPat">Apellido Paterno</label>
                 <input type="text" name="apPat" id="apPat" placeholder="Ingresa tu apellido paterno" required/>
                  <label for="apMat">Apellido Materno</label>
                 <input type="text" name="apMat" id="apMat" placeholder="Ingresa tu apellido materno" required/>
                 <label for="nickname">Nickname</label>
                 <input type="text" name="nickname" id="nickname" placeholder="Ingresa nombre de usuario" required/>
                 <label for="password">Contraseña</label>
                 <input type="password" name="password" id="password" placeholder="Ingresa una contraseña" required/>
                 <label for="departamento">Departamento</label>
                 <input type="text" name="departamento" id="departamento" placeholder="departamento donde laboras" required/>
                 <label for="Id_tipoU">Usuario tipo</label>
                 <select name="Id_tipoU" id="Id_tipoU">
                    <option value="">Tipos de usuario</option>
                 	<option value="Administrador">Administrador</option>
                 	<option value="Cliente">Cliente</option>
                 </select>

                 <label for="status">Estatus</label>
                 <select name="status" id="status">
                    <option value="">Tipos de estatus</option>
                 	<option value="Activo">Activo</option>
                 	<option value="Inactivo">Inactivo</option>
                 	<option value="Eliminado">Eliminado</option>
                 </select>
                 <br>
                  <fieldset>
                 <input type="submit" name="enviar" id="enviar" value="continuar" class="btn btn-primary"/>
                 </fieldset>

                 <fieldset id="loader">
                    <span>Espere un momento</span>
                 </fieldset>

             </form>

             </div>

         </div>

         <div id="div-agregar" class="centrartxt">
             <button class="btn btn-success btn-small"data-toggle="modal" data-target="#agregar">Agregar Usuario</button>
         </div>
         <br>


         <section id="cuerpo" class="center">
           <table class="table table-bordered table-condensed">
              <thead>
                 <tr>
                     <th>Nombre</th>
                     <th>Apellido paterno</th>
                     <th>Apellido Materno</th>
                     <th>Nickname</th>
                     <th>Password</th>
                     <th>Departamento</th>
                     <th>Usuario tipo</th>
                     <th>Estatus</th>
                 </tr>
              </thead>

              <tbody>
              </tbody>
           </table>
         </section>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>