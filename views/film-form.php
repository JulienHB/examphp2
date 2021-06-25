<?php
    require_once('controller/ajout.php');
      
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php ?>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
        <p>
            <label for="titre">Titre</label>
            <input type="text" name="titre" id="titre" value=""/> 
        </p>
        <p>
            <label for="categorie">Catégorie</label>
            <input type="text" name="categorie" id="categorie" value=""/> 
        </p>
        <p>
            <label for="resume">Synopsis</label>
            <textarea name="resume" id="resume"></textarea>
        </p>
        <p>
            <label for="annee">Année</label>
            <input type="text" name="annee" id="annee" value=""/> 
        </p>
        <p>
            <label for="image">Image</label>
            <input type="text" name="image" id="image" value=""/> 
        </p>
        <input type="submit" name="value">
    </form>
    
</body>
</html>
