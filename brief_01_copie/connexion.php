
<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "bdp5";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     // Livre a rajouter dans la base de données
//     // Infos concernant le livre
//     $ISBN = $_POST['isbn'];
//     $Titre = $_POST['titre'];
//     $Theme = $_POST['theme'];
//     $NombrePages = $_POST['nbpages'];
//     $Format = $_POST['format'];
//     $Nom = $_POST['nom'];
//     $Prenom = $_POST['prenom'];
//     $Editeur = $_POST['editeur'];
//     $Annee = $_POST['annee'];
//     $Prix = $_POST['prix'];
//     $Langue = $_POST['langue'];

//     $stmt = $conn->prepare("INSERT INTO `livres`(`ISBN`, `Titre`, `Theme`, `Nb_pages`, `Format`, `Nom_auteur`, `Prenom_auteur`, `Editeur`, `Annee_edition`, `Prix`, `Langue`) 
//     VALUES (:ISBN, :Titre, :Theme, :Nb_pages, :Format, :Nom_auteur, :Prenom_auteur, :Editeur, :Annee_edition, :Prix, :Langue)");

//     $stmt->bindParam(':ISBN', $ISBN);
//     $stmt->bindParam(':Titre', $Titre);
//     $stmt->bindParam(':Theme', $Theme);
//     $stmt->bindParam(':Nb_pages', $NombrePages);
//     $stmt->bindParam(':Format', $Format);
//     $stmt->bindParam(':Nom_auteur', $Nom);
//     $stmt->bindParam(':Prenom_auteur', $Prenom);
//     $stmt->bindParam(':Editeur', $Editeur);
//     $stmt->bindParam(':Annee_edition', $Annee);
//     $stmt->bindParam(':Prix', $Prix);
//     $stmt->bindParam(':Langue', $Langue);

//     $stmt->execute();

//     echo "Insertion réussie" . ' ' . 'Retour à la page ' . '<a href="./accueil.php">d\'accueil</a>';
// } catch(PDOException $e) {
//     echo "Insertion impossible: " . $e->getMessage();
// }

// $conn = null;

// header('Location:accueil.php');

// __________________________________________________________________________
// passage fetch obj
// __________________________________________________________________________



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdp5";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_POST['isbn']) && isset($_POST['titre']) && isset($_POST['theme']) && isset($_POST['nbpages']) && isset($_POST['format']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['editeur']) && isset($_POST['annee']) && isset($_POST['prix']) && isset($_POST['langue'])){

        // Livre à rajouter dans la base de données
        $ISBN = $_POST['isbn'];
        $Titre = $_POST['titre'];
        $Theme = $_POST['theme'];
        $NombrePages = $_POST['nbpages'];
        $Format = $_POST['format'];
        $Nom = $_POST['nom'];
        $Prenom = $_POST['prenom'];
        $Editeur = $_POST['editeur'];
        $Annee = $_POST['annee'];
        $Prix = $_POST['prix'];
        $Langue = $_POST['langue'];

        $stmt = $conn->prepare("INSERT INTO `livres`(`ISBN`, `Titre`, `Theme`, `Nb_pages`, `Format`, `Nom_auteur`, `Prenom_auteur`, `Editeur`, `Annee_edition`, `Prix`, `Langue`) 
        VALUES (:ISBN, :Titre, :Theme, :Nb_pages, :Format, :Nom_auteur, :Prenom_auteur, :Editeur, :Annee_edition, :Prix, :Langue)");

        $stmt->bindParam(':ISBN', $ISBN);
        $stmt->bindParam(':Titre', $Titre);
        $stmt->bindParam(':Theme', $Theme);
        $stmt->bindParam(':Nb_pages', $NombrePages);
        $stmt->bindParam(':Format', $Format);
        $stmt->bindParam(':Nom_auteur', $Nom);
        $stmt->bindParam(':Prenom_auteur', $Prenom);
        $stmt->bindParam(':Editeur', $Editeur);
        $stmt->bindParam(':Annee_edition', $Annee);
        $stmt->bindParam(':Prix', $Prix);
        $stmt->bindParam(':Langue', $Langue);

        $stmt->execute();

        echo "Insertion réussie" . ' ' . 'Retour à la page ' . '<a href="./accueil.php">d\'accueil</a>';
    }else{
        echo "Tous les champs ne sont pas renseignés.";
    }
} catch(PDOException $e) {
    echo "Insertion impossible: " . $e->getMessage();
}

$conn = null;
header('Location:accueil.php');