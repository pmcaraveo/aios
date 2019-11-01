<?php
	include 'claseBD.php';

	$Id = utf8_encode($_POST['Id']);
    $name = utf8_decode($_POST['Nombre']);
    $capi = utf8_decode($_POST['Capitulo']);
    $esta = utf8_decode($_POST['Estatus']);
    $tipo = utf8_decode($_POST['Tipo']);
    $link = utf8_decode($_POST['Link']);
    $deta = utf8_decode($_POST['Detalles']);





    $baseDatos = new claseBD();
    $sentenciaSQL="UPDATE mangas SET Nombre='$name',Capitulo='$capi',Estatus='$esta',Tipo='$tipo',Link='$link',Detalles='$deta' WHERE Id = '$Id'"; 
	
	$result = $baseDatos->modificarRegistro($sentenciaSQL);
    $response = array();
	
    if ($result>0) {
        $response["success"] = 1;
        $response["message"] = "¡Registro Actualizado !";
    } else {
        $response["success"] = 0;
        $response["message"] = "¡Ocurrio un Error!"; 
    }
    echo json_encode($response);
?>