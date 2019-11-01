<?php
	include 'claseBD.php';
    $baseDatos = new claseBD();
	$Id = $_GET['Id'];
	
    
	$sentenciaSQL="SELECT * FROM mangas WHERE Id='$Id'";
	$rs = $baseDatos->consultaRegistros($sentenciaSQL);
	$result = array();
	if (mysqli_num_rows($rs) > 0){
	    while($row = mysqli_fetch_assoc($rs)){
			$result[]= 	array_map('utf8_encode', $row);
		}
	}
	else{
        
        $result["error"] = 1;
        $result["message"] = "El Registro No Existe en la Base de Datos";
		
	}
	
    echo json_encode($result);
	
?>