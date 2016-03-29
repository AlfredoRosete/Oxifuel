<?php
   include('conexion.php');

   class categoria
   {
     private $Id_categoria;
     private $categoria;
     private $status;

     public function setId_categoria($valor)
     {
     	$this->Id_categoria=$valor;
     }

     public function getId_categoria()
     {
     	return $this->Id_categoria;
     }

     public function setcategoria($valor)
     {
     	$this->categoria=$valor;
     }

     public function getcategoria()
     {
     	return $this->categoria;
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
      $sql="insert into categoria(categoria,status)values('".$this->categoria."','".$this->status."');";
      $this->con->consulta($sql);
      $this->con->desconectar();
      return true;

    }
   }// cierra la clase
?>