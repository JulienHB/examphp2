<?php

//1.Je récupère l'adresse demandée 
//Exemple /catalogue-alimentation/2
//J'enlève le premier caractère : le /
//J'obtiens l'adresse catalogue-alimentation/2
$adress=substr($_SERVER['REQUEST_URI'],1);

//Je découpe mon url en fonction du /
//je recpere un tableau 
$adress=explode('/',$adress);

//exemple $adress[0] = catalogue-alimentation
//exemple $adress[1] = 2

switch ($adress[1]):
    case 'film' : 
        require_once('views/film.php');
        break;
    case '' : 
        require_once('views/film-list.php');
        break;
    case 'ajout' : 
        require_once('views/film-form.php');
        break;
    case 'sup' : 
        require_once('views/supp.php');
        break;   
    case 'modif' : 
        require_once('views/film-modif.php');
        break;
    case 'api' :
        require_once('views/api.php');
        break;
    default :
        include 'views/404.php';
        break;
endswitch;

