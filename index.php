<?php include 'modelo/config.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="utf-8">
        <title>Calendario</title>
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=$base_url_css?>css/calendar.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <script type="text/javascript" src="<?=$base_url_css?>js/es-ES.js"></script>
        <script src="<?=$base_url_css?>js/jquery.min.js"></script>
        <script src="<?=$base_url_css?>js/moment.js"></script>
        <script src="<?=$base_url_css?>js/bootstrap.min.js"></script>
        <script src="<?=$base_url_css?>js/bootstrap-datetimepicker.js"></script>
        <link rel="stylesheet" href="<?=$base_url_css?>css/bootstrap-datetimepicker.min.css" />
       <script src="<?=$base_url_css?>js/bootstrap-datetimepicker.es.js"></script>
    </head>

<body style="background: white;">

<div class="container">





<div class="row">
            <div class="col-md-4 col-md-offset-4">
             
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"> Registro</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST"  action="controlador/controlador.usuario.php">
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
            </div>
        </div>



</div>
    <script src="<?=$base_url_css?>js/underscore-min.js"></script>
    <script src="<?=$base_url_css?>js/calendar.js"></script>