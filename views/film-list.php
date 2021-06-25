<?php
include("controller/film.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>netfloo</title>
</head>
<body>
<?php var_dump($_POST);?>
<form action="/examphp2/" method="POST">
<input name ="identifiant" type="text">
<p>PHPkillMe <= password de superUser<br> Par contre faut cliquer deux fois pour que l'id soit chargé dans la session... ???</p>
<input type="submit">
</form>
    <h1>Liste des Films</h1>
    <?php 
    if (!empty($_SESSION['id']) && $_SESSION['id']=='root'):?>
        <a href="/examphp2/ajout/">Ajouter un film</a><?php
    endif;
    foreach ($ofilm as $key => $value) {
        ?>
        <h2><?php echo($value['title'])?></h2>
        <a href="/examphp2/film/<?php  echo($value['idFilm'])?>"><img src="<?php  echo($value['image'])?>"></a><br>
        <?php 
        if (!empty($_SESSION['id']) && $_SESSION['id']=='root'):?>
        <a href="/examphp2/modif/<?php  echo($value['idFilm'])?>">Modifier le film</a><br>
        <a href="/examphp2/sup/<?php  echo($value['idFilm'])?>">Supprimer le film</a>
            
        <?php
        endif;
        ?>
        
    <?php
    }       
    ?>
   
    

</body>
</html>