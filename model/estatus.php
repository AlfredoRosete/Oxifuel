<?php
  include('conexion.php');

  class estatus
  {
    private $status;
    private $descripcion;


    public function setstatus($valor)
    {
      $this->status=$valor;
    }

    public function getstatus()
    {
      return $this->status;
    }
    
    public function setdescripcion($valor)
    {
      $this->descripcion=$valor;
    }

    public function getdescripcion()
    {
      return $this->descripcion;
    }

    public function guardar()
    {

    }
  }
?>