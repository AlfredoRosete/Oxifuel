
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"> Registro</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST"  action="../controlador/controlador.usuario.php">
                                                          <input type="hidden" name="ope" value="4" >

                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nombre de usuario" name="usu" type="" autofocus="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Contraseña" name="pas" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button  type="submit" class="btn btn-lg btn-success btn-block">Entrar</button>
                            </fieldset>
                        </form>
                    </div>
                </div>

