<!DOCTYPE html>
 <html>
   <meta charset="utf-8">
   <head>
     <!--Import Google Icon Font-->
    <link type="text/css" href="css/material-design-icons-3.0.1/iconfont/material-icons.css" rel="stylesheet">
     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

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

  <div class="container">  <!--Container Principal del body-->
    <div class="slider">
    <ul class="slides">
      <li>
        <img src="source/slider1.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>¡Bienvenido!</h3>
        </div>
      </li>
      <li>
        <img src="source/slider2.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Somos tu mejor opción.</h3>
        </div>
      </li>
      <li>
        <img src="source/slider3.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Experiencia a nivel internacional.</h3>
        </div>
      </li>
    </ul>
    </div><!--Fin del slider-->
<br><br>
      <div class="row">

          <div class="col s4">

            <div align="center"><i class="material-icons large">import_export</i></div>
            <h4 class="black-text" align="center">Importaciones y Exportaciones</h4>
            <h5 align="justify"> Somos expertos en cualquier tipo de operación aduanal. </h5>
          </div>

          <div class="col s4">
            <div align="center"><i class="material-icons large">supervisor_account</i></div>
            <h4 align="center">¡Contactanos!<br><br></h4>
            <h5 align="justify"> Contactanos para cualquier duda o sugerencia que tengas. </h5>
    <!-- Promo Content 2 goes here -->
          </div>
          <div class="col s4">
            <div align="center"><i class="material-icons large">stars</i></div>
            <h4 align="center">Calidad</h4><br>
			<h5 align="justify"> Tu satisfacción es y siempre será nuestra prioridad.</h5>
    <!-- Promo Content 3 goes here -->
          </div>

      </div>



</div> <!--Fin del body-->
</main>

          <footer class="page-footer black">
            <div class="container">
              <div class="row">
                <div class="col l6 s6">
                  <h5 class="white-text">IHC</h5>
                  <p class="grey-text text-lighten-4">This is a prototype of the final project.</p>
                </div>
            </div>
          </div>

          <div class="footer-copyright grey darken-4">
            <div class="container">
            © 2016 Copyright
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>



        <!-- Modal Structure -->
          <div id="modal1" class="modal">
            <div class="modal-content">
              <div class="row container">
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="icon_prefix" type="text" class="validate">
                      <label for="icon_prefix">Usuario</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">vpn_key</i>
                      <input id="icon_telephone" type="password" class="validate">
                      <label for="icon_telephone">Contraseña</label>
                    </div>
                  </div>
                </form>
              </div>
            </div>
              <div class="modal-footer">
                <div class="container">
                  <button class="btn waves-effect waves-light black" type="submit" name="action">Entrar
                    <i class="material-icons right">send</i>
                  </button>
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
