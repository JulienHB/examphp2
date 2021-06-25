<?php
require_once('model/film.php');
session_start();
$film=new Film();
if(!empty($_POST) && $_POST['value']=='Envoyer'):
$film->ajoutFilm($_POST['categorie'],$_POST['titre'],$_POST['resume'],$_POST['annee'],$_POST['image']);
endif;
var_dump($adress);
var_dump($_POST);