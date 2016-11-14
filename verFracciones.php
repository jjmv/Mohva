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


    <script type="text/javascript">

    function passVal (id) {

      window.location.href = "eliminarFracciones.php?id="+id;

    } 
    

    </script>


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
<h1>Fracciones</h1>




<?php


$connection = mysql_connect('localhost', 'root', ''); //The Blank string is the password
mysql_select_db('mohva');

$query = "SELECT * FROM fracciones"; //You don't need a ; like you do in SQL
$result = mysql_query($query);

echo "<table>"; // start a table tag in the HTML

echo "<thead>";
echo "<tr>";
//echo "<th data-field='id'>Id</th>";
echo "<th data-field='Numero de pedimento'>Fraccion</th>";
echo "<th data-field='Cliente'>Descripcion</th>";
echo "</tr>";
echo "</thead>";
//<td>" . $row['id'] . "</td>
while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['fraccion'] . "</td><td>" . $row['descripcion'] . "</td><td> <a onclick='passVal(".$row['id'].");' class='btn-floating btn-large waves-effect waves-light red'><i  class='material-icons'>delete</i></a> </td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML

mysql_close(); //Make sure to close out the database connection


 ?>










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