<?php
require('database.php');
$post = ['id' => '', 'nomArticle' => '', 'quantite' => '', 'user' => '', 'pwd' => ''];
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['_method']) && $_POST['_method'] === 'update') {
    $statement = $pdo->prepare('SELECT * FROM post WHERE id = :id');
    $statement->execute([':id' => $_POST['id']]);
    $post = $statement->fetch(PDO::FETCH_ASSOC);
} 




?>



<!DOCTYPE html>
<html>
<head>
    <title>formulaire</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: sans-serif;
            line-height: 1.5;
            min-height: 100vh;
            background: #f3f3f3;
            flex-direction: column;
            margin: 0;
        }

        .main {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 500px;
            text-align: center;
        }

        h1 {
            color: #4CAF50;
        }

        label {
            display: block;
            width: 100%;
            margin-top: 10px;
            margin-bottom: 5px;
            text-align: left;
            color: #555;
            font-weight: bold;
        }

        input, select {
            display: block;
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            padding: 15px;
            border-radius: 10px;
            margin-top: 15px;
            margin-bottom: 15px;
            border: none;
            color: white;
            cursor: pointer;
            background-color: #4CAF50;
            width: 100%;
            font-size: 16px;
        }
    </style>
</head>
<body>

    <div class="main">
        <h1>Inserer un Nouveau Article</h1>
        <form action="modifier.php" method="POST">
            
     

            <input type="hidden" id="id" name="id" >
                        
            <label for="nomArticle">nomArticle</label>
            <input type="text" id="nomArticle" name="nomArticle" 

            <label for="quantite">quantite</label>
            <input type="number" id="quantite" name="quantite">
            
            <label for="titre">user</label>
            <input type="text" id="user" name="user" >

            <label for="pwd">pwd</label>
            <input type="text" id="pwd" name="pwd" >




            <button type="submit" name="modifier">Modifier</button>
   
        </form>
    </div>
   
</body>
</html>