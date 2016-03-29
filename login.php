<!--Ingeniero: Emmanuel Reyes Rosas 
formulario de autenticacion
 -->
<!DOCTYPE html>
  <html>
     <head>
          <title>Ingresar</title>
          <meta name="viewport" content="width=device-width, initial-escale=1">
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
          <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
          <link rel="stylesheet" type="text/css" href="css/login.css">
             

     </head>

     <body>
           

   <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default boxlogin">
                    <div class="panel-heading">
                       
                        <br>
                        <img src="imagenes/oxifuel.jpeg" width="260" height="130" align="center">
                    </div>
                    <div class="panel-body">
                        <form role="form" id="Login">
                            <fieldset>
                                <div class="form-group">
                                    <label>Nombre de usuario:</label>  
                                    <input class="form-control" placeholder="Nombre de usuario" name="nickname" id="nickname" type="text" required/>
                                    
                                </div>

                                <div class="form-group">
                                     <label>Ingrese su contraseña</label>
                                    <input class="form-control" placeholder="contraseña" id="password" name="password" type="password" required/>
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <a href="#" type="submit" class="btn btn-lg btn-success btn-block">Ingresar</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     </body>

  

    
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   <!-- <script src="js/bootstrap.min.js"></script>-->
   


  </html>