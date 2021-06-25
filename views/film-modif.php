<?php
    require_once('controller/modif.php');
      
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
    <input type='hidden' name='idProduit' id='idProduit' value='<?php echo($ofilm[0]['idFilm'])?>' />
        <p>
            <label for="titre">Titre</label>
            <input type="text" name="titre" id="titre" value="<?php echo($ofilm[0]['title'])?>"/> 
        </p>
        <p>
            <label for="categorie">Catégorie</label>
            <input type="text" name="categorie" id="categorie" value="<?php echo($ofilm[0]['categorie'])?>"/> 
        </p>
        <p>
            <label for="resume">Synopsis</label>
            <textarea name="resume" id="resume"><?php echo($ofilm[0]['resume'])?></textarea>
        </p>
        <p>
            <label for="annee">Année</label>
            <input type="text" name="annee" id="annee" value="<?php echo($ofilm[0]['year'])?>"/> 
        </p>
        <p>
            <label for="image">Image</label>
            <input type="text" name="image" id="image" value="<?php echo($ofilm[0]['image'])?>"/> 
        </p>
        <input type="submit" name="value">
    </form>
    
</body>
</html>
