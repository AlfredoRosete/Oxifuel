<button type="button" class="btn btn-default navbar-btn" data-toggle="modal" data-target=".cat" > <span> <i class="glyphicon glyphicon-log-in"></i></span> Registra Categoria </button>


<div class="modal fade cat" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">



                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Registar Categoria</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form"  method="POST" action="../controlador/controlador.categoria.php"  >
                            <fieldset>


                                  <input type="hidden" name="ope" value="1" >
                                  <input type="hidden" name="status" value="A" >


                                <div class="form-group">
                                    <input class="form-control" placeholder="categoria" name="categoria" type="text" autofocus="" required="" pattern="[a-z A-Z]+">

                                </div>






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
