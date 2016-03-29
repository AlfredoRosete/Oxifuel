<?php
/*codigo que permite la conexion a la base de datos mysql
*@autor:Emmanuel Reyes Rosas
*Fecha: 16-04-2014
*/
class conexion
{
	//atributo que contine la cadena de conexion
	private $conex;
	//Métodos:
	//metodo que se encarga de hacer la conexion con la base de datos
	public function conectar ()
	{
		if (!isset($this->conex))
		{
			$this->conex=new mysqli("localhost","root","","oxifuel");
			if ($this->conex->connect_error)
			{
				printf ("Conexion fallo: %s/n",$this->conex->connect_error);
				exit();
			}
		}
	}

	public function consulta ($transaccion)
	{
		if(!$resultado=$this->conex->query($transaccion))
		{
			echo "fallo en sql:(".$this->conex->connect_error.")";
		}
		return $resultado;
	}

	public function fetch_array($resultado)
	{

		return $resultado->fetch_array(MYSQLI_ASSOC);
	}

	public function desconectar()
	{
		$this->conex->close();
	}

	public function num_rows($resultado)
	{
	return $resultado->num_rows;
	}
}

?>
