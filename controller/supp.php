<?php
require_once('model/film.php');
session_start();
$film=new Film();
$ofilm=$film->getFilm($adress[2]);
if(!empty($_POST) && $_POST['value']=='Envoyer'):
$film->setErase($_POST['idProduit']);
header('location:http://coursphp/examphp2/');
endif;
