<?php
	include 'claseBD.php';
    $baseDatos = new claseBD();
    
	$sentenciaSQL="SELECT count(*) as total FROM mangas WHERE Tipo = 'Manhwa'";
	
	$rs = $baseDatos->consultaRegistros($sentenciaSQL);
	$result = array();
	if (mysqli_num_rows($rs) > 0){
	    while($row = mysqli_fetch_assoc($rs)){
			$result[]= 	array_map('utf8_encode', $row);
		}
	}
	else{
        
        $result["error"] = 1;
        $result["message"] = "No hay Registros";
		
	}
	
    echo json_encode($result);
	
?>