<?php 
require "database.php";



if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['supprimier'])){
    $id = $_POST['id'];
    $statment=$pdo->prepare('DELETE FROM post WHERE id=:id');
    $statment->execute([":id" => $id]);
    
}
header('location:afficher.php');
?>
