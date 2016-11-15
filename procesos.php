<?php
session_start();
if(isset($_SESSION['usuario'])){
    header('Location: empleadosIndex.php');
} $errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	//$password = hash('sha512', $password);

	try {

		$conexion = new PDO('mysql:host=localhost;dbname=mohva', 'root', ''); #Modificar a la hora de implementar

	} catch (PDOException $e) {
		echo "Error: " . $e->getMessage();
	}

	$statement = $conexion->prepare('
		SELECT * FROM  usuarios WHERE usuario = :usuario AND pass = :password'
	);

	$statement->execute(array(
		':usuario'=>$usuario,
		':password'=>$password
		));

	$resultado = $statement->fetch();
	if ($resultado != false) {
		$_SESSION['usuario'] = $usuario;
		header('Location: empleadosIndex.php');
	} else {
		$errores .= '<li>Datos Incorrectos</li>';

	}

}
?>

<!DOCTYPE html>
 <html>
   <meta charset="utf-8">
   <head>
     <title>Procesos</title>
     <!--Import Google Icon Font-->
     <link type="text/css" href="css/material-design-icons-3.0.1/iconfont/material-icons.css" rel="stylesheet">
     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
     <link rel="stylesheet" href="css/estilos.css">
     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   </head>

   <main>
     <nav class="black">
         <div class=" container nav-wrapper black">
           <a href="index.php"><i class="material-icons left">home</i></a>
           <a href="index.php" class="brand-logo ">Mohva Logistics</a>
           <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
           <ul class="right hide-on-med-and-down">
             <li><a href="compania.php"><i class="material-icons left">perm_identity</i>Compañia</a></li>
             <li><a href="aduanas.php"><i class="material-icons left">language</i>Aduanas</a></li>
             <li><a href="procesos.php"><i class="material-icons left">work</i>Procesos</a></li>
             <li><a href="contactoIndex.php"><i class="material-icons left">phone</i>Contacto</a></li>
             <li><a class="waves-effect waves-light btn modal-trigger  orange darken-3" href="#modal1">Empleados</a></li>
           </ul>
           <ul class="side-nav" id="mobile-demo">
             <li><a href="compania.php">Compañia</a></li>
             <li><a href="aduanas.php">Aduanas</a></li>
             <li><a href="procesos.php">Procesos</a></li>
             <li><a href="contactoIndex.php">Contacto</a></li>
             <li><a class="waves-effect waves-light btn modal-trigger orange darken-3" href="#modal1">Empleados</a></li>
           </ul>

       </div>

   </nav>
    <br><br><br><br>
    <div class="container">
      <div class="row">
        <div class="col 6 m6">
          <div class="card">
             <div class="card-image waves-effect waves-block waves-light">
               <img class="activator" src="source/card1.jpg">
               <span class="card-title">Importación</span>
             </div>
             <div class="card-content">
             <span class="card-title activator grey-text text-darken-4">Presiona aquí o en la imagen.<i class="material-icons right">more_vert</i></span>

             </div>
           <div class="card-reveal">
             <span class="card-title grey-text text-darken-4">¿Que necesito?<i class="material-icons right">close</i></span>
               <p>Para realizar una importación usted necesita:</p>
               <ul>
                 <li>- Factura de la mercancia.</li>
                 <li>- Guia de embarque.</li>
                 <li>- Certificado de origen.</li>
                 <li>- Packing List.</li>
                 <li>- Pedimento de tránsito en caso de existir.</li>
               </ul>
          </div>
        </div>
        </div>

        <div class="col 6 m6">
          <div class="card">
             <div class="card-image waves-effect waves-block waves-light">
               <img class="activator" src="source/card2.jpg">
               <span class="card-title">Exportación</span>
             </div>
             <div class="card-content">
             <span class="card-title activator grey-text text-darken-4">Presiona aquí o en la imagen.<i class="material-icons right">more_vert</i></span>

             </div>
           <div class="card-reveal">
             <span class="card-title grey-text text-darken-4">¿Que necesito?<i class="material-icons right">close</i></span>
               <p>Para una exportación usted necesita:</p>
               <ul>
                 <li>- Factura de la mercancia.</li>
                 <li>- Guia de embarque.</li>
               </ul>
          </div>
        </div>
        </div>

      </div>
    </div>


  </main>

   <footer class="page-footer black">
     <div class="container">
       <div class="row">
         <div class="col l6 s12">
           <h5 class="white-text">IHC</h5>
           <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
         </div>
         <div class="col l4 offset-l2 s12">
           <h5 class="white-text">Links</h5>
           <ul>
             <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>

           </ul>
         </div>
       </div>
     </div>
     <div class="footer-copyright grey darken-4">
       <div class="container">
       © 2014 Copyright Text
       <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
       </div>
     </div>
   </footer>

        <!-- Modal Structure -->
          <div id="modal1" class="modal">
            <div class="modal-content">
                <h3 align="center"> Ingrese los siguientes datos </h3>
              <div class="row container">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" name="login" class="col s12" method="post">
                  <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">account_circle</i>
                      <input name="usuario" id="icon_prefix" type="text" class="validate">
                      <label for="icon_prefix">Usuario</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">vpn_key</i>
                      <input name="password" id="icon_telephone" type="password" class="validate">
                      <label for="icon_telephone">Contraseña</label>
                    </div>
                  </div>





                </form>
              </div>
            </div>
              <div class="modal-footer">
                <div class="container">
                  <button class="btn waves-effect waves-light black" type="submit" name="action" onclick="login.submit()">Entrar
                    <i class="material-icons right" onclick="login.submit()">send</i>
                  </button>

                  <?php if(!empty($errores)):  ?> <!-- Si hay errores, los muestra -->
                    <div>
                      <ul>
                        <?php echo $errores; ?>
                      </ul>
                    </div>
                  <?php endif; ?>

                </div>
              </div>
            </div>






<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="js/jquery2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
  $(".button-collapse").sideNav(); //Script para barra cuando navegador cambia de tamaño
  $(document).ready(function(){
  $('.slider').slider({full_width: true, height:550, indicators: false});
  });
  $(document).ready(function(){
// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
 $('.modal-trigger').leanModal();
 });


</script>

</html>
