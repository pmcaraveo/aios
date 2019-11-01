
<?php
	include 'claseBD.php';	

	$name = utf8_decode($_POST['nombre']);
    $capi = utf8_decode($_POST['capitulo']);
    $esta = utf8_decode($_POST['estatus']);
    $tipo = utf8_decode($_POST['tipo']);
    $link = utf8_decode($_POST['link']);
    $deta = utf8_decode($_POST['detalles']);
    
	$baseDatos = new claseBD();
    $sentenciaSQL="INSERT INTO mangas (Nombre,Capitulo,Estatus,Tipo,Link,Detalles) 
                    VALUES('$name','$capi','$esta','$tipo','$link','$deta')"; 
	
	$result = $baseDatos->insertarRegistro($sentenciaSQL);

$response = array();


    if ($result) {
       
        $response["success"] = 1;
        $response["message"] = " Successfull!!";
    } else {
       
        $response["success"] = 0;
        $response["message"] = "¡Ocurrio un error!";
       
    }
  
    echo json_encode($response);
?>