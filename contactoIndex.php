<?php

$errores2='';
$enviado='';

if (isset($_GET['submit'])) {
  $nombre = $_GET['nombre'];
  $correo = $_GET['correo'];
  $mensaje = $_GET['mensaje'];

  if(!empty($nombre)){
    $nombre = trim($nombre);
    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
  }else {
    $errores2.= 'Por favor ingresa un nombre </br>';
  }

  if (!empty($correo)) {
    //$correo = trim($$correo);
    $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

    if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
      $errores2.= 'Por favor ingresa un correo valido <br />';
    }


  }else {
    $errores2.= 'Por favor ingresa un correo <br />';
  }
  if (!empty($mensaje)) {
    $mensaje = htmlspecialchars($mensaje);
    $mensaje = trim($mensaje);
    $mensaje = stripcslashes($mensaje);
  } else {
    $errores2.= 'Por favor ingresa el mensaje';
  }

  if (!$errores2) { //Se pregunta SI NO HAY ERRORES


    try {

        $conexion = new PDO('mysql:host=localhost;dbname=mohva', 'root','');


        $statement = $conexion->prepare("INSERT INTO contacto VALUES(null, :nombre, :correo, :mensaje )");
        $statement->execute(array(':nombre' => $nombre , ':correo' => $correo, ':mensaje' => $mensaje ));
        
        $resultados = $statement->fetchall();
        foreach ($resultados as $usuarios) {
          echo $usuarios['nombre'] . '<br />';
        }
  
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    //mail($enviar_a, $asunto, $mensaje_preparado); //esta función probablemente no funcione con xampp(habrá que configurarse, solo pasa en local host) En un hosting no pasa esto.
    $enviado = 'true';

  }


}

// echo htmlspecialchars($_SERVER['PHP_SELF']);

require 'contactoVista.php';

 ?>


