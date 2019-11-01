<?php
 session_start();
 require_once 'DBconfig.php';

  $user = trim($_POST['user']);
  $user_password = md5(trim($_POST['password']));
  
  try
  { 
  
   $stmt = $db_con->prepare("SELECT * FROM usuarios WHERE Usuario=:email and Activo = '1'");
   $stmt->execute(array(":email"=>$user));
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $count = $stmt->rowCount();
   
   if($row['Contrasenia']==$user_password){
    
    echo "ok"; // log in
    $_SESSION['user_session'] = $row['Id'];
   }
   else{
    
    echo "¡ El Nombre de Usuario o Contraseña son Incorrectos"; // wrong details 
   }
    
  }
  catch(PDOException $e){
   echo $e->getMessage();
  }


?>