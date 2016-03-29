<?php
   include('conexion.php');

   class departamento
   {
     private $Id_depto;
     private $departamento;
     

     public function setId_depto($valor)
     {
     	$this->Id_depto=$valor;
     }

     public function getId_depto()
     {
     	return $this->Id_depto;
     }

     public function setdepartamento($valor)
     {
     	$this->departamento=$valor;
     }

     public function getdepartamento()
     {
     	return $this->departamento;
     }

     

    public function guardar()
    {

    $this->con=new conexion();
      $this->con->conectar();
      $sql="insert into departamento(departamento)values('".$this->departamento."');";
      $this->con->consulta($sql);
      $this->con->desconectar();
      return true;

    }
   }// cierra la clase
?>