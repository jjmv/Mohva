<?php

$error = '';

if (isset($_POST['submit'])) {
    $error.= "entro en el IF";
    $numPedim = $_POST['numPedim'];
    $cliente = $_POST['cliente'];
    $fraccion = $_POST['fraccion'];
    $importe = $_POST['importe'];
    $impuesto = $_POST['impuesto'];


    /*if(!empty($nombre)){
    $nombre = trim($nombre);
    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
  }else {
    $errores.= 'Por favor ingresa un nombre </br>';
  }

  if (!empty($correo)) {
    //$correo = trim($$correo);
    $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

    if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
      $errores.= 'Por favor ingresa un correo valido <br />';
    }


  }else {
    $errores.= 'Por favor ingresa un correo <br />';
  }
  if (!empty($mensaje)) {
    $mensaje = htmlspecialchars($mensaje);
    $mensaje = trim($mensaje);
    $mensaje = stripcslashes($mensaje);
  } else {
    $errores.= 'Por favor ingresa el mensaje';
  }

  if (!$errores) { //Se pregunta SI NO HAY ERRORES
*/


    try{

  
    $conexion = new PDO('mysql:host=localhost;dbname=mohva', 'root', '');
 
    $statement = $conexion->prepare("INSERT INTO pedimentos VALUES(null, :numPedim, :cliente, :fraccion, :importe, :impuesto)");
    $error .= "preparo la conexion";  
    $statement->execute(array(':numPedim' => $numPedim, ':cliente' => $cliente, ':fraccion' => $fraccion, ':importe' => $importe, ':impuesto' => $impuesto ));
  
    $resultados = $statement->fetchall();
    foreach ($resultados as $usuarios) {
          echo $usuarios['nombre'] . '<br />';
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }



}




?>











<!DOCTYPE html>
<html>
    <head>
    <!--Import Google Icon Font-->
   <link type="text/css" href="css/material-design-icons-3.0.1/iconfont/material-icons.css" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="utf-8">
    <title>Bienvenido!</title>

    <style type="text/css">

        header, main, footer {
      padding-left: 300px;
    }

    @media only screen and (max-width : 992px) {
      header, main, footer {
        padding-left: 0;
      }
    }
    </style>


    </head>

      <body>
        <header>

          <ul id="slide-out" class="side-nav fixed">
         <li><div class="userView" align="center">
           <div class="background black">

           </div>
           <a href="#!user"><img class="circle" src="source/mohvalogo.png"></a>
           <a href="#!name"><span class="white-text name">Ejemplo Empleado</span></a>
           <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
         </div></li>
          <li><a class="subheader" align="center">Menú</a></li>
         <li><div class="divider"></div></li>
          <li><a class="waves-effect waves-orange " href="verPedimentos.php"><i class="material-icons">pageview</i>Ver Pedimentos</a></li>
           <li><a class="waves-effect waves-orange " href="agregarPedimentos.php"><i class="material-icons">add_circle</i>Agregar Pedimentos</a></li>
            <li><a class="waves-effect waves-orange " href="verFracciones.php"><i class="material-icons">view_list</i>Fracciones</a></li>
            <li><a class="waves-effect waves-orange " href="agregarFracciones.php"><i class="material-icons">view_list</i>Agregar Fracciones</a></li>
             <li><a class="waves-effect waves-orange " href="mensajes.php"><i class="material-icons">message</i>Mensajes</a></li>

         <br><br>
         <li  ><a class="waves-effect waves-light btn  orange darken-3 white-text" href="cerrar.php"><i class="material-icons white-text" >power_settings_new</i>Salir</a></li>
       </ul>

        </header>

        <main>
            <div class="container">    
<h1>Agregar pedimentos </h1>




 <div class="row">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="col s12" method="POST" name="login">
      <div class="row">
        <div class="input-field col s12">
          <input name="numPedim" placeholder="1234567" id="first_name" type="text" class="validate">
          <label for="first_name">Numero de pedimento</label>
        </div>

        <div class="input-field col s12">
          <input name="cliente" placeholder="Empresa, Nombre, etc." id="first_name" type="text" class="validate">
          <label for="first_name">Cliente</label>
        </div>

        <div class="input-field col s12">
          <input name="fraccion" placeholder="123456789" id="first_name" type="text" class="validate">
          <label for="first_name">Fraccion</label>
        </div>

        <div class="input-field col s12">
          <input name="importe" placeholder="99.99" id="first_name" type="text" class="validate">
          <label for="first_name">Importe</label>
        </div>

        <div class="input-field col s12">
          <input name="impuesto" placeholder="99.99" id="first_name" type="text" class="validate">
          <label for="first_name">Impuestos</label>
        </div>   

        <button class="btn waves-effect waves-light black" type="submit" name="submit">Enviar
    <i class="material-icons right">send</i>     
        
    </form>
  </div>




            </div>   
        </main>


      



   




  </body>
  <script type="text/javascript" src="js/jquery2.1.1.min.js"></script>
   <script type="text/javascript" src="js/materialize.min.js"></script>
   <script>
   $(".button-collapse").sideNav();
   // Initialize collapsible (uncomment the line below if you use the dropdown variation)
   //$('.collapsible').collapsible();
   $(document).ready(function(){
// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
  $('.modal-trigger').leanModal();
  });
   </script>
</html>



