<?php
     include('conexion.php');   

  class Usuario
  {
    
    private $Id_usuario;
    private $nombre;
    private $apPat;
    private $apMat;
    private $nickname;
    private $password;
    private $Id_depto;
    private $Id_tipoU;
    private $status;
    private $con;

    public function __construct($args)
    {
        $cantidad=sizeof($args);

        switch ($cantidad)
        {

            case 9:

            $this->Id_usuario=$args[0];
            $this->nombre=$args[1];
            $this->apPat=$args[2];
            $this->apMat=$args[3];
            $this->nickname=$args[4];
            $this->password=$args[5];
            $this->Id_depto=$args[6];
            $this->Id_tipoU=$args[7];
            $this->status=$args[8];
            break;

            case 1:
            $this->Id_usuario=$args[0];
            break;



        }
    }


    public function setId_usuario($valor)
    {
       $this->Id_usuario=$valor;
    }

    public function getId_usuario()
    {
        return $this->Id_usuario;
    }

    public function setnombre($valor)
    {
    	$this->nombre=$valor;
    }

    public function getnombre()
    {
    	return $this->nombre;
    }

    public function setapPat($valor)
    {
    	$this->apPat=$valor;
    }

    public function getapPat()
    {
    	return $this->apPat;
    }

    public function setapMat($valor)
    {
    	$this->apMat=$valor;
    }

    public function getapMat()
    {
    	return $this->apMat;
    }

    public function setnickname($valor)
    {
    	$this->nickname=$valor;
    }

    public function getnickame()
    {
    	return $this->nickname;
    }

    public function setpassword($valor)
    {
    	$this->password=$valor;
    }

    public function getpassword()
    {
    	return $this->password;
    }

    public function setId_depto($valor)
    {
    	$this->Id_depto=$valor;

    }

    public function getId_depto()
    {
    	return $this->Id_depto;
    }

    public function setId_tipoU($valor)
    {
    	$this->Id_tipoU=$valor;
    }

    public function getId_tipoU()
    {
    	return $this->Id_tipoU;
    }

    public function setstatus($valor)
    {
    	$this->status=$valor;
    }

    public function getstatus()
    {
    	return $this->status;
    }

    public function guardar()
    {
      $this->con=new conexion();
      $this->con->conectar();
      $sql="insert  into usuario (nombre,apPat,apMat,nickname  ) value ('".$this->nombre."','".$this->apPat."','".$this->apMat."','".$this->nickname."','".$this->password."','".$this->Id_depto."','".$this->Id_tipoU."','".$this->status."');";
      $this->con->consulta($sql);
      $this->con->desconectar();
      echo $sql;
      //die();
      return true;
    }//cierra el guardar

   public function eliminar()	
	{
	$this->con=new conexion();
	$this->con->conectar();
	$sql="update usuario set status='I' where Id_usuario='".$this->Id_usuario."'";	
					
	//echo $sql;
	$this->con->consulta($sql);
	$this->con->desconectar();
	return true;

	}//cierra el eliminar

	

	 	public function listartodos($query,$desde,$paginas)
	{
		//si queremos paginar
		if($desde!=0 or $paginas!=0)
		{
			$query.=" LIMIT ".$desde.",".$paginas."";
		}
		//*****
		$this->con= new conexion();
		$this->con->conectar();
		$tabla=$this->con->consulta($query);
		$lista=array(); //creamos un arreglo
		if($this->con->num_rows($tabla)>0)
		{
			while($fila=$this->con->fetch_array($tabla))
			{		
			$tmp=new Usuario(array($fila["Id_usuario"],$fila["nombre"],$fila["apPat"],$fila["apMat"],$fila["nickname"],$fila["password"],$fila["Id_depto"],$fila["Id_tipoU"],$fila["status"]));
			array_push($lista,$tmp);		
			}
		}
		$this->con->desconectar();
		return $lista;
	}//cierra listartodos

  }//cierre de la clase
?>
