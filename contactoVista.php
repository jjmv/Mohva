<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulario Contacto</title>


    <!--Import Google Icon Font-->
    <link type="text/css" href="css/material-design-icons-3.0.1/iconfont/material-icons.css" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/estilos.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style type="text/css">
        .mdl-card__media {
          margin: 0;
        }
        .mdl-card__media {
        margin: 0;
        }
        </style>
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

    </main>





    <body>
      <div class="container">
          <br><br>
          <div class="row">
            <div class="col s6 ">
              <div class="card">
                <div class="card-image">
                  <img src="source/hangar2.jpg" alt="">
                  <span class="card-title">Telefono y direccion</span>
                </div>
                <div class="card-content">
                  <div class="col s6">
                    <ul>
                      <li>Telefonos</li>
                      <li>80-31-54-48</li>
                      <li>83-82-51-70</li>
                    </ul>
                  </div>
                  <div class="col s6">
                    <ul>
                      <li>Direccion</li>
                      <li>Av. Chopo No. ### </li>
                      <li> Col. Los Ebanos Apodaca, Nuevo Leon México</li>
                    </ul>
                  </div>
                </div>
                <div class="card-content">
                <h4>Horario</h4><p>De lunes a viernes de 9am a 6pm</p>
                </div>
              </div>
            </div>
          <div class="col s6">
              <div class="card">
                <div class="card-image">
                  <img src="source/hangar.jpg" alt="">
                  <span class="card-title">E-mail</span>
                </div>
                <div class="card-content">
                    <ul>
                      <li><h5>Personal Encargado</h5></li>
                      <li>Jesus Javier Moreno Mendez</li>
                      <li>jesus.j.moreno@gmail.com </li>
                      <li><h5>Correo de la empresa</h5></li>
                      <li> mohva-logistics@gmail.com</li>
                    </ul>

                </div>

              </div>
                <div class="card-action">

                </div>
              </div>
            </div>



        <p class="flow-text">Si tiene alguna duda o sugerencia no dude en compartirla con nosotros! Su opinion nos interesa.</p>


        <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">


        <div class="row">
        <div class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">account_circle</i>
              <input id="nombre" name="nombre" type="text" class="validate" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">
              <label for="icon_prefix">Nombre</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">email</i>
              <input id="correo" name="correo" type="email" class="validate" value="<?php if(!$enviado && isset($correo)) echo $correo ?>">
              <label for="icon_telephone">Correo</label>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
       <div class="row">
         <div class="input-field col s12">
           <i class="material-icons prefix">mode_edit</i>
           <textarea id="mensaje" name="mensaje" class="materialize-textarea"><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>
           <label for="icon_prefix2">Escribe aqui tu mensaje.</label>
         </div>
       </div>
   </div>
   <button class="btn waves-effect waves-light black" type="submit" name="submit">Enviar
    <i class="material-icons right">send</i>
  </button>
 </form>
 <?php if(!empty($errores)):  ?>
     <div class="alert error">
         <?php echo $errores; ?>
     </div>
 <?php elseif($enviado):

   echo "El mensaje ha sido enviado. ¡Gracias por sus comentarios!";

   endif ?>

  </div>





</body>


    <footer class="page-footer black">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
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
   $(document).ready(function(){
// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
  $('.modal-trigger').leanModal();
  });
   </script>


   </html>
