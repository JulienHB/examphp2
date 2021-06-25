<?php
class Film {
public function __construct(){

}
private function BDDconnection($sql){
    $serverName='localhost';
    $userName='root';
    $password='';
    $base='netfloo';
    try{
        $bdd= new PDO("mysql:host=$serverName;dbname=$base;charset=utf8",$userName,$password); 
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $req= $bdd->prepare($sql);
        $req->execute();  
        $result=$req->fetchAll();
        $req->closeCursor();
        return $result;           
    }         
    catch(PDOException $e){
        switch($e->getCode()):
        case 1049:
            echo('Wrong bdd name '.$base);
            break;    
        case 2002:
            echo('Wrong server '.$serverName);
            break;
        case 'HY000':
            echo('la BDD existe déjà');
            break;   
            default:
            echo('Erreur : '.$e->getMessage());
            break;
        endswitch;          
    }
}


public function getAll(){
    return $this->BDDconnection('SELECT * FROM film');
}

public function getFilm($id){
    return $this->BDDconnection('SELECT * FROM film WHERE `idFilm`='.$id);
}

public function modifFilm($id,$categorie,$title,$resume,$year,$image){
    return $this->BDDconnection("UPDATE `film` SET
    `categorie`='{$categorie}',
    `title`='{$title}',
    `resume`='{$resume}', 
    `year`={$year},
    `image`='{$image}',
     WHERE
    `idFilm`=".$id);
}

public function ajoutFilm($categorie,$title,$resume,$year,$image){
    return $this->BDDconnection("INSERT INTO `film` (`categorie`,`title`,`resume`,`year`,`image`)
    VALUES ('{$categorie}','{$title}','{$resume}','{$year}','{$image}')");
}

public function setErase($id){
    return $this->BDDconnection("DELETE FROM `film` WHERE `idFilm`=".$id);
}
}
