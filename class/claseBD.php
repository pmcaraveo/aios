<?php
class claseBD {

	private $DB_USER;
	private $DB_PASSWORD;
	private $DB_DATABASE;
	private $DB_SERVER;
	private $conexion;

    function __construct() {
		$this->DB_USER= "root"; // db user
		$this->DB_PASSWORD= ""; // db password (mention your db password here)
		$this->DB_DATABASE= "aios"; // database name
		$this->DB_SERVER= "localhost"; // db server
   		$this->conexion;
    }

	function abrirConexion(){
        $this->conexion = mysqli_connect($this->DB_SERVER, $this->DB_USER, $this->DB_PASSWORD, $this->DB_DATABASE); 
		if (!$this->conexion) {
    		die('Error de Conexión (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
		}	         		
	}
	function cerrarConexion(){
		if ($this->conexion)		
        	mysqli_close($this->conexion);		
	}

    function insertarRegistro($sentenciaSQL)
	{
		$this->abrirConexion();
	    $result = mysqli_query($this->conexion, $sentenciaSQL);
		$this->cerrarConexion();
		return $result;
	}

    function eliminarRegistro($sentenciaSQL)
	{
		$this->abrirConexion();
	    $result = mysqli_query($this->conexion, $sentenciaSQL);
		$this->cerrarConexion();
		return $result;
		}

    function modificarRegistro($sentenciaSQL)
	{
		$this->abrirConexion();
	    $result = mysqli_query($this->conexion, $sentenciaSQL);
		$modificado=mysqli_affected_rows($this->conexion);
		$this->cerrarConexion();
		return $modificado;
	}

	function consultaRegistros($sentenciaSQL)
	{
		$this->abrirConexion();
	    $result = mysqli_query($this->conexion, $sentenciaSQL);
		$this->cerrarConexion();
		return $result;
	}

}


?>