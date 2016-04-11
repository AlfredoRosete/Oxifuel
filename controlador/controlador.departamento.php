<?php
session_start();
   require '../modelo/config.php';
   $ope=$_REQUEST['ope'];
    if($ope==NULL){
        $ope=$_GET['ope'];
        if($ope==NULL){
            exit;
        }
    }
     
     
    switch($ope)
    {

        case 1:


      $bd  = $conexion->query(" INSERT INTO departamento (departamento,clave) VALUES ('".$_POST['departamento']."','A')");

            if ($bd) 
            {
            echo "<script type='text/javascript'> alert('datos insertados correctamente');</script>";
            echo '<script type="text/javascript">window.location.href="../vista/reg.departamento.php";</script>';

            }
            else{ 
            echo "hubo un error al insertar los datos"; 


            } 

        break;

        case 2:

        $bd  = $conexion->query(" DELETE FROM departamento WHERE  id_departamento= '".$_GET['id']."' ");

            if ($bd) 
            {
            echo "<script type='text/javascript'> alert('Registro Eliminado');</script>";
            echo '<script type="text/javascript">window.location.href="../vista/reg.departamento.php";</script>';

            }
            else{ 
            echo "hubo un error al insertar los datos"; 


            } 




            
        break;
        
        case 3:


          $bd  = $conexion->query("UPDATE departamento SET  departamento = '".$_POST['departamento']."'  WHERE id_departamento = '".$_POST['id']."'");

            if ($bd) 
            {
            echo "<script type='text/javascript'> alert('Registro Se actualizo correctamente');</script>";
            echo '<script type="text/javascript">window.location.href="../vista/reg.usuarios.php";</script>';

            }
            else{ 
            echo "hubo un error al insertar los datos"; 


            } 



            
        break;

        case 4 :


        
        break;

    }
?>
