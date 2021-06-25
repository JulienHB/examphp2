<?php
require_once('model/film.php');
session_start();
$film=new Film();
$ofilm=$film->getFilm($adress[2]);
if(!empty($_POST) && $_POST['value']=='Envoyer'):
$film->modifFilm($_POST['idProduit'],$_POST['categorie'],$_POST['titre'],$_POST['resume'],$_POST['annee'],$_POST['image']);
endif;
var_dump($ofilm);
var_dump($adress);
var_dump($_POST);