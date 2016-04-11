<button type="button" class="btn btn-default navbar-btn" data-toggle="modal" data-target=".art" > <span> <i class="glyphicon glyphicon-log-in"></i></span> Registra Articulo </button>


<div class="modal fade art" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">



                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Registar Articulo</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form"  method="POST" action="../controlador/controlador.articulo.php"  >
                            <fieldset>


                                  <input type="hidden" name="ope" value="1" >
                                  <input type="hidden" name="status" value="A" >


                                <div class="form-group">
                                    <input class="form-control" placeholder="articulo" name="articulo" type="text" autofocus="" required="" pattern="[a-z A-Z]+">

                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Precio" name="precio" type="number" value="" required="" pattern="[0-9]{9}">
                                </div>

                                 <div class="form-group">
                                    <input class="form-control" placeholder="Piezas a ingresar" name="Totalpiezas" type="number" autofocus="" required="" pattern="[0-9]{9}">
                                </div>

                                                                  
                                 <div class="form-group">

                              <select id="campos" class="form-control" name="Id_categoria" style="overflow: auto; " >
                                <?php 
                                
                                $bd2  = $conexion->query("SELECT * FROM categoria ");
                                while ($row2 = mysqli_fetch_assoc($bd2))
                                {
                                echo "<option value=". $row2['id_categoria'] .">".  $row2['categoria'] ."</option>";
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



