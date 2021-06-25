<?php
include("controller/film.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://coursphp/examphp2/">
    <title>Netloo</title>
</head>
<body>
    <h1>Détail du film</h1>
    <a href="http://coursphp/examphp2/">Retour à l'accueil</a>
    <?php 
        foreach ($ofilm as $key => $value) {
        ?>
        <h2><?php echo($value['title'])?></h2>
        <h3> Catégorie :<?php echo($value['categorie'])?></h3>
        <img src="<?php echo($value['image'])?>">
        <h4>Année de sortie : <?php echo($value['year'])?></h4>
        <p>Synopsis : <?php echo($value['resume'])?></p>       
    <?php
    }       
    ?>
   
    

</body>
</html>