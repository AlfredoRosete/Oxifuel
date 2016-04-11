

<div class="modal fade modo<?php echo $row['id_usuario']?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">



                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Registra Usuario</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form"  method="POST" action="../controlador/controlador.usuario.php"  >
                            <fieldset>


                                  <input type="hidden" name="ope" value="3" >
                                  <input type="hidden" name="status" value="A" >
                                  <input type="hidden" name="id" value="<?php echo $row['id_usuario']; ?>" >



                                <div class="form-group">
                                    <input class="form-control" placeholder="nombre" value="<?php echo $row['nombre']; ?>" name="nombre" type="text" autofocus="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Apellido Paterno" name="ap" type="text" value="<?php echo $row['ap']; ?>">
                                </div>

                                 <div class="form-group">
                                    <input class="form-control" placeholder="Apellido Materno" name="am"  value="<?php echo $row['am']; ?>" type="text" autofocus="">
                                </div>

                                 <div class="form-group">
                                    <input class="form-control" placeholder="Nickname"  value="<?php echo $row['nick']; ?>" name="nick" type="text" autofocus="">
                                </div>


                                 <div class="form-group">
                                    <input class="form-control" placeholder="contraseña"  value="<?php echo $row['contrasenia']; ?>" name="contra" type="text" autofocus="">
                                </div>

                                 <div class="form-group">
                              <select id="campos" class="form-control" name="tipo" style="overflow: auto; " >

                                <?php 
                                
                                $bd2  = $conexion->query("SELECT * FROM tipo_usuario ");
                                while ($row2 = mysqli_fetch_assoc($bd2))
                                {
                                echo "<option value=".$row2['tipo'] ;
                                if($row["tipo"]==$row2['tipo'] ) echo " selected='selected'";
                                echo ">".$row2['descripcion']."</option>";

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



