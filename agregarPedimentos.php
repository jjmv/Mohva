<?php

$errores = '';

$enviado = '';
if (isset($_POST['submit'])) {


    $numPedim = $_POST['numPedim'];
    $cliente = $_POST['cliente'];
    $fraccion = $_POST['fraccion'];
    $importe = $_POST['importe'];
    $impuesto = $_POST['impuesto'];

    if(!empty($numPedim)){ // Si no está vacío, osea sí se ingreso un numero de pedimento
      if(!is_numeric($numPedim)){ // Pregunta si no es numérico el dato ingresado
        $errores.= "Debe Ingresar solo numeros para el pedimento </br>";
      } else if(strlen($numPedim) != 7){
        $errores.= "El numero de pedimento no es de 7 digitos </br>";
      }

    } else {
      $errores.= "Por favor ingrese un numero de pedimento <br />";
    }


    if(!empty($cliente)){
      $cliente = trim($cliente);
      $cliente = filter_var($cliente, FILTER_SANITIZE_STRING);
    } else {
      $errores.= "Por favor ingrese un cliente <br />";
    }

    if(!empty($fraccion)){
      if(!is_numeric($fraccion)){
        $errores .= "Debe ingresar solo numeros para la fraccion <br />";
      }
    } else {
      $errores.= "Por favor ingrese una fraccion <br />";
    }

    if(!empty($importe)){
      if(!is_numeric($importe)){
        $errores .= "Debe ingresar solo numeros para el importe <br />";
      }
    } else {
      $errores.= "Por favor ingrese un importe <br />";
    }

    if(!empty($impuesto)){
      if(!is_numeric($impuesto)){
        $errores .= "Debe ingresar solo numeros para el impuesto <br />";
      }
    } else {
      $errores.= "Por favor ingrese un impuesto <br />";
    }



  if (!$errores) {



    try{


    $conexion = new PDO('mysql:host=localhost;dbname=mohva', 'root', '');

    $statement = $conexion->prepare("INSERT INTO pedimentos VALUES(null, :numPedim, :cliente, :fraccion, :importe, :impuesto)");

    $statement->execute(array(':numPedim' => $numPedim, ':cliente' => $cliente, ':fraccion' => $fraccion, ':importe' => $importe, ':impuesto' => $impuesto ));

    $resultados = $statement->fetchall();
    foreach ($resultados as $usuarios) {
          echo $usuarios['nombre'] . '<br />';
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $enviado = 'true';

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
           <a href="#!email"><span class="white-text email">empleado@gmail.com</span></a>
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
          <input value="<?php if(!$enviado && isset($numPedim)) echo $numPedim ?>" name="numPedim" placeholder="1234567" id="first_name" type="text" class="validate" required>
          <label for="first_name">Numero de pedimento</label>
        </div>

        <div class="input-field col s12">
          <input value="<?php if(!$enviado && isset($cliente)) echo $cliente ?>" name="cliente" placeholder="Empresa, Nombre, etc." id="first_name" type="text" class="validate" required>
          <label for="first_name">Cliente</label>
        </div>

        <div class="input-field col s12">
          <input value="<?php if(!$enviado && isset($fraccion)) echo $fraccion ?>" name="fraccion" placeholder="123456789" id="first_name" type="text" class="validate" required>
          <label for="first_name">Fraccion</label>
        </div>

        <div class="input-field col s12">
          <input value="<?php if(!$enviado && isset($importe)) echo $importe ?>" name="importe" placeholder="99.99" id="first_name" type="text" class="validate" required>
          <label for="first_name">Importe</label>
        </div>

        <div class="input-field col s12">
          <input value="<?php if(!$enviado && isset($impuesto)) echo $impuesto ?>" name="impuesto" placeholder="99.99" id="first_name" type="text" class="validate" required>
          <label for="first_name">Impuestos</label>
        </div>

        <button class="btn waves-effect waves-light black" type="submit" name="submit">Enviar
    <i class="material-icons right">send</i>



    </form>



  </div>




            </div>

           <?php if(!empty($errores)): ?>
        <div >
          <?php echo $errores; ?>
        </div>
        <?php elseif($enviado):
          echo "Pedimento agregado";
          endif ?>
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
