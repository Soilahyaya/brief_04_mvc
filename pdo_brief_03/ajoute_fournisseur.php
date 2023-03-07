<?php session_start(); ?>
<?php include './header_fournisseur.php'; ?>
<?php
$dsn = 'mysql:host=localhost;dbname=bdp5';
$username = 'root';
$password = '';

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->query("SELECT * FROM fournisseur");
    $fournisseurs = $stmt->fetchAll(PDO::FETCH_OBJ);

    echo "<table border='1'>";
    echo "<td>" . 'Code' . "</td>";
    echo "<td>" . 'Raison sociale' . "</td>";
    echo "<td>" . 'Rue' . "</td>";
    echo "<td>" . 'Code postal' . "</td>";
    echo "<td>" . 'Localite' . "</td>";
    echo "<td>" . 'Pays' . "</td>";
    echo "<td>" . 'Telephne' . "</td>";
    echo "<td>" . 'Url' . "</td>";
    echo "<td>" . 'Email' . "</td>";
    echo "<td>" . 'Fax' . "</td>";

    foreach ($fournisseurs as $fournisseur) {
        echo "<tr>";
        echo "<td>" . $fournisseur->Code_fournisseur . "</td>";
        echo "<td>" . $fournisseur->Raison_sociale . "</td>";
        echo "<td>" . $fournisseur->Rue_fournisseur . "</td>";
        echo "<td>" . $fournisseur->Code_postal . "</td>";
        echo "<td>" . $fournisseur->Localite . "</td>";
        echo "<td>" . $fournisseur->Pays . "</td>";
        echo "<td>" . $fournisseur->Tel_fournisseur . "</td>";
        echo "<td>" . $fournisseur->Url_fournisseur . "</td>";
        echo "<td>" . $fournisseur->Email_fournisseur . "</td>";
        echo "<td>" . $fournisseur->Fax_fournisseur . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

include './footer_fournisseur.php';
?>