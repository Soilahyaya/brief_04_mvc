<?php
// connexion db
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdp5";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Configuration des erreurs PDO pour afficher les erreurs
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // récup du livre
    $id = $_GET['id'];
    $isbn = $_POST['isbn'];
    $titre = $_POST['titre'];
    $theme = $_POST['theme'];
    $nbpages = $_POST['nbpages'];
    $format = $_POST['format'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $editeur = $_POST['editeur'];
    $annee = $_POST['annee'];
    $prix = $_POST['prix'];
    $langue = $_POST['langue'];

    // Requête de mise à jour
    $edit = "UPDATE `livres` SET `ISBN`=:isbn, `Titre`=:titre, `Theme`=:theme, `Nb_pages`=:nbpages, `Format`=:format, `Nom_auteur`=:nom, `Prenom_auteur`=:prenom, `Editeur`=:editeur, `Annee_edition`=:annee, `Prix`=:prix, `Langue`=:langue WHERE Id=:id";
    $stmt = $conn->prepare($edit);
    $stmt->bindParam(':isbn', $isbn);
    $stmt->bindParam(':titre', $titre);
    $stmt->bindParam(':theme', $theme);
    $stmt->bindParam(':nbpages', $nbpages);
    $stmt->bindParam(':format', $format);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':editeur', $editeur);
    $stmt->bindParam(':annee', $annee);
    $stmt->bindParam(':prix', $prix);
    $stmt->bindParam(':langue', $langue);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    header('location: consultation.php');
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
$conn = null;
?>
