<?php 


$id = $_GET['id'];

try{

    $conexion = new PDO('mysql:host=localhost;dbname=mohva', 'root', '');

    $statement = $conexion->prepare('DELETE FROM fracciones WHERE id = :id');
    $statement->execute(array(':id' => $id));



} catch (PDOException $e){

    echo "Error: " . $e->getMessage();

}

header('Location: verFracciones.php');




?>