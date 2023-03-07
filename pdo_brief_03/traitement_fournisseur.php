<?php

try {
     $connex = new PDO ('mysql:host=localhost;dbname=bdp5','root','');
    $connex->query("SET NAMES'utf8'");
    $connex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Livre a rajouter dans la base de données
    // Infos concernant le livre
    $CODE_FOURNISSEUR = $_POST['Code_fournisseur'];
    $RAISON_SOCIALE = $_POST['Raison_sociale'];
    $RUE_FOURNISSEUR = $_POST['Rue_fournisseur'];
    $CODE_POSTALE = $_POST['Code_postal'];
    $LOCALITE = $_POST['Localite'];
    $PAYS  = $_POST['Pays'];
    $TEL_FOURNISSEUR = $_POST['Tel_fournisseur'];
    $URL_FOURNISSEUR = $_POST['Url_fournisseur'];
    $EMAIL_FOURNISSEUR = $_POST['Email_fournisseur'];
    $FAX_FOURNISSEUR = $_POST['Fax_fournisseur'];

    $stmt = $connex->prepare("INSERT INTO `fournisseur`(Code_fournisseur, Raison_sociale, Rue_fournisseur, Code_postal, Localite, Pays, Tel_fournisseur, Url_fournisseur, Email_fournisseur, Fax_fournisseur) 
    VALUES (:Code_fournisseur, :Raison_sociale, :Rue_fournisseur, :Code_postal, :Localite, :Pays, :Tel_fournisseur, :Url_fournisseur, :Email_fournisseur, :Fax_fournisseur)");


    $stmt->bindParam(':Code_fournisseur', $CODE_FOURNISSEUR);
    $stmt->bindParam(':Raison_sociale', $RAISON_SOCIALE);
    $stmt->bindParam(':Rue_fournisseur', $RUE_FOURNISSEUR);
    $stmt->bindParam(':Code_postal', $CODE_POSTALE);
    $stmt->bindParam(':Localite', $LOCALITE);
    $stmt->bindParam(':Pays', $PAYS);
    $stmt->bindParam(':Tel_fournisseur',  $TEL_FOURNISSEUR);
    $stmt->bindParam(':Url_fournisseur', $URL_FOURNISSEUR);
    $stmt->bindParam(':Email_fournisseur', $EMAIL_FOURNISSEUR);
    $stmt->bindParam(':Fax_fournisseur', $FAX_FOURNISSEUR);

    $stmt->execute();

} catch(PDOException $e) {
    echo "Insertion impossible: " . $e->getMessage();
}

echo "Insertion réussie" . ' ' . 'Retour à la page ' ;
echo  '<a href="../brief_01_copie/accueil.php">accueil</a>';
$conn = null;

header('Location: ../brief_01_copie/accueil.php');
?>