<button type="button" class="btn btn-default navbar-btn" data-toggle="modal" data-target=".hola" > <span> <i class="glyphicon glyphicon-log-in"></i></span> Registra Usuario </button>


<div class="modal fade hola" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">



                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Registra Usuario</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form"  method="POST" action="../controlador/controlador.usuario.php"  >
                            <fieldset>


                                  <input type="hidden" name="ope" value="1" >
                                  <input type="hidden" name="status" value="A" >


                                <div class="form-group">
                                    <input class="form-control" placeholder="nombre" name="nombre" type="text" autofocus="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="ap" name="ap" type="text" value="">
                                </div>

                                 <div class="form-group">
                                    <input class="form-control" placeholder="am" name="am" type="text" autofocus="">
                                </div>

                                 <div class="form-group">
                                    <input class="form-control" placeholder="nick" name="nick" type="text" autofocus="">
                                </div>


                                 <div class="form-group">
                                    <input class="form-control" placeholder="contra" name="contra" type="text" autofocus="">
                                </div>

                                   <div class="form-group">

                              <select id="campos" class="form-control" name="id_departamento" style="overflow: auto; " >
                                <?php 
                                
                                $bd2  = $conexion->query("SELECT * FROM departamento ");
                                while ($row2 = mysqli_fetch_assoc($bd2))
                                {
                                echo "<option value=". $row2['id_departamento'] .">".  $row2['departamento'] ."</option>";
                                }
                                ?>

                                </select>   

                                </div>



                                 <div class="form-group">

                              <select id="campos" class="form-control" name="tipo" style="overflow: auto; " >
                                <?php 
                                
                                $bd2  = $conexion->query("SELECT * FROM tipo_usuario ");
                                while ($row2 = mysqli_fetch_assoc($bd2))
                                {
                                echo "<option value=". $row2['tipo'] .">".  $row2['descripcion'] ."</option>";
                                }
                                ?>

                                </select>   

                                </div>

                                <!-- Change this to a button or input when using this as a form --> 

                            <button type="submit" class="btn btn-lg btn-success btn-block">Guardar</button>

                            </fieldset>


                        </form>
                    </div>
                </div>
                    </div>
  </div>
</div>



