<?php
require_once('model/film.php');
session_start();
$film=new Film();
if (!empty($_POST) && $_POST['identifiant']=='PHPkillMe'):
    $_SESSION['id']='root';
endif;
if (!empty($_POST) && $_POST['identifiant']!='PHPkillMe'):
    $_SESSION['id']='newbi';
endif;
if ($adress[1]==''):
$ofilm=$film->getAll();
else:
$ofilm=$film->getFilm($adress[2]);
endif;










