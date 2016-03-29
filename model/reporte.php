<?php
   include('conexion.php');

   class reporte
   {
      private $Id_reporte;
      private $Id_articulo;
      private $Id_categoria;
      private $Id_usuario;
      private $piezas;
      private $total;


      public function setId_reporte($valor)
      {
      	$this->Id_reporte=$valor;
      }

      public function getId_reporte()
      {
      	return $this->Id_reporte;
      }

      public function setId_articulo($valor)
      {
      	$this->Id_articulo=$valor;
      }

      public function getId_articulo()
      {
      	return $this->Id_articulo;
      }

      public function setId_categoria($valor)
      {
      	$this->Id_categoria=$valor;
      }

      public function getId_categoria()
      {
      	return $this->Id_categoria;
      }

      public function setId_usuario($valor)
      {
      	$this->Id_usuario=$valor;
      }

      public function getId_usuario()
      {
      	return $this->Id_usuario;
      }

      public function setpiezas($valor)
      {
      	$this->piezas=$valor;
      }

      public function getpiezas()
      {
      	return $this->piezas;
      }

       public function settotal($valor)
      {
    	$this->total=$valor;
      }

      public function gettotal()
      {
    	return $this->total;
      }

      public function guardar()
      {

      $this->con=new conexion();
      $this->con->conectar();
      $sql="insert into articulo(Id_articulo,Id_categoria,Id_usuario,piezas,total)
      values('".$this->Id_articulo."','".$this->Id_categoria."','".$this->Id_usuario."','".$this->piezas."','".$this->total."');";
      $this->con->consulta($sql);
      $this->con->desconectar();
      return true;

      }






   }
?>