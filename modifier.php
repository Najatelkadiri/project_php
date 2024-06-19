
<?php
require('database.php');
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['modifier'])) {
    $statement = $pdo->prepare('UPDATE post SET   nomArticle = :nomArticle,quantite=:quantite, pwd = :pwd,user = :user   WHERE id = :id');
    $statement->execute([
        ':nomArticle' => $_POST['nomArticle'],
        ':quantite' => $_POST['quantite'],
        ':pwd' => $_POST['pwd'],
        ':user' => $_POST['user'],
        ':id' => $_POST['id']
        
    ]);
    
    header('Location:afficher.php');


}


?>




