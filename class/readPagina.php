<?php
	include 'claseBD.php';
    $baseDatos = new claseBD();
	//$idUser = $_POST['idUsuario'];
    
	$sentenciaSQL="SELECT*FROM paginas_web";
	
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