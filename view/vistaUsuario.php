<!DOCTYPE html  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Vista usuario</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
  </head> 
  <body>
    <header align="center">Usuarios del sistema</header>
     <section>
    <table border="0" align="center">
    	<tr>
        	    <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                    Agregar Usuario
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel">Agregar usuario</h4>
                        </div>
                        <div class="modal-body">
       								
       							
                                    <form method="POST" action="../controler/controladorUsuario.php" onsubmit="return formulario(this)">
                                      <div class="row">
                                        <div class="col-md-6">
                                         
                                          <p><label>Nombre</label><input type="text" class="form-control" id="nombre" name="nombre" type="text" required="required"/></p>
                                          <p><label>Apellido Paterno</label><input type="text" class="form-control" id="apPat" name="apPat" type="text" required="required"/></p>
                                          <p><label>Apellido Materno</label><input type="text" class="form-control" id="apMat" name=" apMat" type="text" required="required"/></p>
                                          <p><label>Nombre de Usuario</label><input type="text" class="form-control" id="nickname" name="nickname"type="text" required="required"/></p>
                                        </div>
                                        <div class="col-md-6">
                                          
                                          <p><label>Contraseña</label><input type="password" class="form-control" id="password" name="password"  required="required"/></p>
                                          <p><label>Departamento</label><select class="form-control" id="Id_depto" name="Id_depto" required="required">
                        		                                    <option value="1">Normatividad</option>
                                                                    <option value="2">Soporte Técnico</option>
                                                                    <option value="3">Auditoría</option>
                                                                    <option value="4">Sistemas</option>
                                                                    <option value="5">Administración y Finanzas</option>
                                                                    <option value="6">Ventas y Embarques</option>
                          
                                                                </select></p>
                                          <p><label>Usuario tipo</label><select class="form-control" id="Id_tipoU" name="Id_tipoU"required="required">
                        		                                        <option value="1">Administrador</option>
                                                                        <option value="2">Cliente</option>
                          
                                                                </select></p>
                                          <p><label>Estatus</label><select class="form-control" id="status" name="status" required="required">
                        		                                    <option value="A">activo</option>
                                                                    <option value="I">inactivo</option>
                          
                                                                </select></p>

                                                                 <input type="hidden" value="1" id="ope" name="ope"/>
                                         <div>
                                      </div>
                                    
                                    


                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                          <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                      </div>
                      </form>
                    </div>
                  </div>
            
        </tr>
    </table>
    </section>

    <div class="container">
    		
    		<div class="row">

    
   

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>

