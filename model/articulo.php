<?php
   include('conexion.php');

   class articulo
   {
      private $Id_articulo;
      private $articulo;
      private $precio;
      private $Totalpiezas;
      private $Id_categoria;
      private $status;


      public function setId_articulo($valor)
      {
      	$this->Id_articulo=$valor;
      }

      public function getId_articulo()
      {
      	return $this->Id_articulo;
      }

      public function setarticulo($valor)
      {
      	$this->articulo=$valor;
      }

      public function getarticulo()
      {
      	return $this->articulo;
      }

      public function setprecio($valor)
      {
      	$this->precio=$valor;
      }

      public function getprecio()
      {
      	return $this->precio;
      }

      public function setTotalpiezas($valor)
      {
      	$this->Totalpiezas=$valor;
      }

      public function getTotalpiezas()
      {
      	return $this->Totalpiezas;
      }

      public function setId_categoria($valor)
      {
      	$this->Id_categoria=$valor;
      }

      public function getId_categoria()
      {
      	return $this->Id_categoria;
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
      $sql="insert into articulo(articulo,precio,Totalpiezas,Id_categoria,status)
      values('".$this->articulo."','".$this->precio."','".$this->Totalpiezas."','".$this->Id_categoria."','".$this->status."');";
      $this->con->consulta($sql);
      $this->con->desconectar();
      return true;

      }






   }
?>