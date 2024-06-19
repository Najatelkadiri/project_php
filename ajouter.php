<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css"/>
</head>
<body>
    <style>
        form{
            margin-left: 40px;
        }
        button{
           width: 1200px;
           
        }
    </style>
    <?php
    require 'database.php';
    ?>    
      <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            require "database.php";
    
            $id = $_POST['id'];
            $nomArticle = $_POST['nomArticle'];
            $quantite = $_POST['quantite'];
            $user = $_POST['user'];
            $pwd = $_POST['pwd'];
          
    
            $sql = "INSERT INTO post (id, nomArticle,quantite,user, pwd) VALUES (:id, :nomArticle,:quantite,:user, :pwd)";
            $statement = $pdo->prepare($sql);
            
            $statement->execute([
                ':id' =>$id,
                ':nomArticle'=>$nomArticle,
                ':quantite'=>$quantite,
                ':user' =>$user,
                ':pwd' =>$pwd
               
            ]);
            header("location:afficher.php");
    
            }
?>
        <form  method="POST">
        <div class="mb-3">
                <label for="form-label">id</label>
                <input type="text" class="form-control" name="id">
            </div>
            <div class="mb-3">
                <label for="form-label">nomArticle</label>
                <input type="text" class="form-control" name="nomArticle">
            </div>
            <div class="mb-3">
                <label for="form-label">quantite</label>
                <input type="text" class="form-control" name="quantite">
            </div>

            <div class="mb-3">
                <label for="form-label">user</label>
                <input type="text" class="form-control" name="user">
            </div>
            <div class="mb-3">
                <label for="form-label">pwd</label>
                <input type="text" class="form-control" name="pwd">
            </div>
           
            <div>
                <button type="submit" class="btn btn-primary" name="ajouter">submit</button>
            </div>
        </form>
    </div>
</body>
</html>



