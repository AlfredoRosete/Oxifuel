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

            $bd  = $conexion->query(" INSERT INTO usuario ( id_departamento,nombre,ap,am,nick,contrasenia,clave,tipo) VALUES ('".$_POST['id_departamento']."','".$_POST['nombre']."','".$_POST['ap']."','".$_POST['am']."','".$_POST['nick']."','".$_POST['contra']."','".$_POST['status']."','".$_POST['tipo']."')");

            if ($bd) 
            {
            echo "<script type='text/javascript'> alert('datos insertados correctamente');</script>";
            echo '<script type="text/javascript">window.location.href="../vista/reg.usuarios.php";</script>';

            }
            else{ 
            echo "hubo un error al insertar los datos"; 


            } 

        break;

        case 2:

        $bd  = $conexion->query(" DELETE FROM usuario WHERE  id_usuario= '".$_GET['id']."' ");

            if ($bd) 
            {
            echo "<script type='text/javascript'> alert('Registro Eliminado');</script>";
            echo '<script type="text/javascript">window.location.href="../vista/reg.usuarios.php";</script>';

            }
            else{ 
            echo "hubo un error al insertar los datos"; 


            } 




            
        break;
        
        case 3:


        $bd  = $conexion->query("UPDATE usuario SET  nombre = '".$_POST['nombre']."',ap = '".$_POST['ap']."', am = '".$_POST['am']."',  nick  = '".$_POST['nick']."',  contrasenia = '".$_POST['contra']."' , tipo = '".$_POST['tipo']."'  WHERE id_usuario = '".$_POST['id']."'");

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



    $nom=addslashes($_POST["usu"]);
    $passw=addslashes($_POST["pas"]);

    
    
        $bd  = $conexion->query(" select * from usuario where nick='".$nom."' and contrasenia= '".$passw."'  and clave = 'A'");
    
    if($bd->num_rows <1)
    {
        echo "<script language=’JavaScript’>alert(‘Los datos son incorrectos ’);</script>"; 

    }
    else
    {


        $id =  $bd->fetch_assoc();
        if($id['tipo']== 'Ad')
        {       
         session_start();
        $_SESSION['tipo'] = $id['tipo'];
        $_SESSION['admin'] = $id['nombre'];
        echo "<script language=’JavaScript’>alert(‘Eres un Administrador ’);</script>"; 
        $redir2="../vista/admin.php";
        header("Location:" . $redir2); 
        }
        if ($id['tipo']=='Usu')
        {
            session_start();
        $_SESSION['tipo'] = $id['tipo'];
        $_SESSION['cliente'] = $id['nombre'];
        echo "<script language=’JavaScript’>alert(‘Eres un Usuario ’);</script>"; 
        $redir3="../vista/usuario.php";
        header("Location:".$redir3); 

        }
        else 
        {       
        echo "<script language=’JavaScript’>alert(‘Error los datos son incorrectos’);</script>"; 
        echo $id['Id_tipoU'];
        }
        
        
        
    }
    



        
        break;

    }
?>
