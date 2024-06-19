<!-- revison poo(class,objet)
+connexion poo
+selection (select * from ..)
+formulaire(Ajouter)
+les tableau(select |*) -->


<!-- pdo ka tkhalina ntkoniktaw m3a base de donne -->
<!-- //select ka tjib lia les donne
    //delete ka tmsah
    //update ka tzid
    //insert ka taansiri les donne
    //query mqthode kq tjin donne mn la base -->

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css"/>
</head>
<body>
    <?php
    //bach njibou les donner 
    require 'database.php';//bach n3ytou ela la base de donne


    $statment= $pdo ->query("SELECT * FROM post");
    $post= $statment->fetchAll(PDO::FETCH_OBJ);
    echo"<pre>";
    print_r($post);
    echo"</pre>";
    ?>
    <div   class="container">
        <a href="ajouter.php" class= "btn btn-success link float-end">ajouter</a>
        <a href="deconnecter.php" class= "btn btn-primary link float-end">deconnecter</a>
    <table  class="table" >
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">nomArticle</th>
                <th scope="col">quantite</th>
                <th scope="col">user</th>
                <th scope="col">pwd</th>
              
                </tr>
            </thead>   
            <tbody>
                <?php
                   foreach($post as $val):
                ?>
                        <tr>
                        <td><?php echo $val->id?></td>
                        <td><?php echo $val->nomArticle?></td>
                        <td><?php echo $val->quantite?></td>
                            <td><?php echo $val->user?></td>
                            <td><?php echo $val->pwd // <td><?php echo $val['titre']?></td> 
                       
                            <td>

                            
                                <form method='post' action="supprimier.php">
                                    <input type="hidden" name='id' value="<?php echo $val->id?>">
                                    <input class="btn btn-danger" type="submit" value="supprimier" name="supprimier">
                                    <a href="modification.php"  name='modifier' class= "btn btn-success link float-end">modifier</a>
                                </form>
                            </td>
                        </tr>
                        <?php
                        endforeach;
                        ?>
                       
            </tbody>    
</table>
    </div>
 
</body>
</html>



