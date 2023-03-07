<?php
session_start();
include './header_fournisseur.php'; 

// Vérifier si le formulaire a été soumis
if (isset($_POST['tri_critere'])) {

    // Se connecter à la base de données
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "bdp5";

    try {
        $connex = new PDO("mysql:host=$hostname;dbname=$databaseName", $username, $password);
        $connex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Récupérer le critère de tri sélectionné
        $tri_critere = $_POST['tri_critere'];
        echo "$tri_critere";

        // Préparer la requête SQL de tri des livres en fonction du critère sélectionné
        $query = "SELECT * FROM fournisseur WHERE Raison_sociale = '$tri_critere'";

        // Exécuter la requête SQL
        $stmt = $connex->query($query);
        $stmt->setFetchMode(PDO::FETCH_OBJ);

        echo "<table border='1'>";
        echo "<tr>
            <th>Code</th>
            <th>Raison sociale</th>
            <th>Rue</th>
            <th>Code postal</th>
            <th>Localite</th>
            <th>Pays</th>
            <th>Telephone</th>
            <th>Url</th>
            <th>Email</th>
            <th>Fax</th>
        </tr>";

        while ($fournisseur = $stmt->fetch()) {
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

    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    include './footer_fournisseur.php';
}
