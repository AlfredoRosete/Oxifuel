<?php
  include('conexion.php');

  class tipousuario
  {
  	private $Id_tipoU;
  	private $descripcion;

  	public function setId_tipoU($valor)
  	{
  		$this->Id_tipoU=$valor;

  	}

  	public function getId_tipoU()
  	{
  		return $this->Id_tipoU;
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