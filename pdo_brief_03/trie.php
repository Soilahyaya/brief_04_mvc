<?php
session_start();
include './header_fournisseur.php';
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "bdp5";

// Connexion à la base de données avec PDO
try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$databaseName", $username, $password);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Requête SQL pour sélectionner tous les fournisseurs
$query = "SELECT DISTINCT Raison_sociale FROM fournisseur";

// Exécute la requête SQL avec PDO
$result1 = $pdo->query($query);
$result2 = $pdo->query($query);

?>


<form action="trie_traitement.php" method="post">
    <select name="tri_critere" id="">
        <?php while($row1 = $result1->fetch()): ?>
            <option value="<?php echo $row1[0]; ?>"><?php echo $row1[0]; ?></option>
        <?php endwhile; ?>
    </select>
    <input type="submit" value="valider"/>
</form>

<?php include './footer_fournisseur.php';?>