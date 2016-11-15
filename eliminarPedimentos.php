<?php 


$id = $_GET['id'];

try{

    $conexion = new PDO('mysql:host=localhost;dbname=mohva', 'root', '');

    $statement = $conexion->prepare('DELETE FROM pedimentos WHERE id = :id');
    $statement->execute(array(':id' => $id));



} catch (PDOException $e){

    echo "Error: " . $e->getMessage();

}

header('Location: verPedimentos.php');



?>