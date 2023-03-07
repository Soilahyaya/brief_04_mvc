<?php

    try {
        $connex = new PDO ('mysql:host=localhost;dbname=bdp5','root','');
    $connex->query("SET NAMES'utf8'");
    $connex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connex->prepare('SELECT ISBN, Titre, Theme, Nb_pages, Format, Nom_auteur, Prenom_auteur, Editeur, Annee_edition, Prix, Langue FROM livres');
        
        $requete->execute();

        while($obj = $requete->fetch(PDO::FETCH_OBJ) ){

echo '<p>'.$obj->ISBN.'<BR>'.$obj->Titre.'<BR>'.$obj->Theme.'<BR>'.$obj->Nb_pages.'<BR>'.$obj->Format.'<BR>'.$obj->Nom_auteur.'<BR>'.$obj->Prenom_auteur.'<BR>'.$obj->Editeur.'<BR>'.$obj->Annee_edition.'<BR>'.$obj->Prix.'<BR>'.$obj->Langue.'<BR>'.'<p/>';
        }
    }
    catch(PDOException $e){
           die('<p> Erreur['.$e->getCode().']:'.$e->getMessage().'</p>');
    }

?>

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