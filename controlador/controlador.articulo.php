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


            $bd  = $conexion->query(" INSERT INTO articulo (articulo,precio,TotalPiezas,id_categoria,clave) VALUES ('".$_POST['articulo']."','".$_POST['precio']."','".$_POST['Totalpiezas']."','".$_POST['Id_categoria']."','A')");

            if ($bd) 
            {
            echo "<script type='text/javascript'> alert('datos insertados correctamente');</script>";
            echo '<script type="text/javascript">window.location.href="../vista/reg.articulos.php";</script>';

            }
            else{ 
            echo "hubo un error al insertar los datos"; 


            } 

        break;

        case 2:

        $bd  = $conexion->query(" DELETE FROM articulo WHERE  id_articulo= '".$_GET['id']."' ");

            if ($bd) 
            {
            echo "<script type='text/javascript'> alert('Registro Eliminado');</script>";
            echo '<script type="text/javascript">window.location.href="../vista/reg.articulos.php";</script>';

            }
            else{ 
            echo "hubo un error al insertar los datos"; 


            } 




            
        break;
        
        case 3:


        $bd  = $conexion->query("UPDATE articulo SET  articulo='".$_GET['articulo']."',precio='".$_GET['precio']."',TotalPiezas='".$_GET['Totalpiezas']."',id_categoria='".$_GET['Id_categoria']."',clave='A'  WHERE id_articulo = '".$_POST['id']."'");

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
