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

    }
   }// cierra la clase
?>