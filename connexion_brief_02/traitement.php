<?php

    try {
        $connex = new PDO ('mysql:host=localhost;dbname=bdp5','root','');
    $connex->query("SET NAMES'utf8'");
    $connex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connex->prepare('SELECT Nom, Prenom, Adresse_email, Mot_de_passe FROM connexion');
        
        $requete->execute();

        while($obj = $requete->fetch(PDO::FETCH_OBJ) ){

echo '<p>'.$obj->Nom.'<BR>'.$obj->Prenom.'<BR>'.$obj->Adresse_email.'<BR>'.$obj->Mot_de_passe.'<p/>';
        }
    }
    catch(PDOException $e){
           die('<p> Erreur['.$e->getCode().']:'.$e->getMessage().'</p>');
    }



?>

