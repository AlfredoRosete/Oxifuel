<?php
   class Conexion {
      
      public function conectar(){
                              #localhost, user, password, nombrebd, puertomysql
         $mysqli = new mysqli('localhost','root','','oxifuel');
         
         if ($mysqli->connect_errno)
            header('Location: Error404.html');
            #echo "fallo la conexion";

        $mysqli->set_charset('utf8');
         
         return $mysqli;
      }
      
   }


   //Para probar la conexion lo puedo hacer de este modo, al finalizar la prueba lo comento.
   $Conexion = new Conexion();
   $Conexion->conectar();
