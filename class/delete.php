

<?php
	include 'claseBD.php';
	
	
	$Id = $_POST['Id'];
	
    $baseDatos = new claseBD();
    $sentenciaSQL="DELETE FROM mangas WHERE Id='$Id'"; 
	$result = $baseDatos->eliminarRegistro($sentenciaSQL);
	
    if ($result) {
        
        $response["success"] = 1;
        $response["message"] = "Registro Eliminado ";
    } else {
       
        $response["success"] = 0;
        $response["message"] = "No se ha logrado Eliminar";      
    }
    
    echo json_encode($response);
?>