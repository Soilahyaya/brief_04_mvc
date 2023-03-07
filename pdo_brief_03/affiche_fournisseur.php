<?php session_start(); ?>
<?php include './header_fournisseur.php'; ?>

<div class="titre"><h1>Page de consultation des fournisseur</h1></div>

<?php
echo '<a href="../brief_01_copie/deconnexion.php"><button>Deconnexion</button></a>';
?>

<script>
  function la(src) {
    window.location = src;
  }
</script>

<?php
try {
  $dbh = new PDO('mysql:host=localhost;dbname=bdp5', 'root', '');
  $stmt = $dbh->query("SELECT * FROM fournisseur");

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

  while ($fournisseur = $stmt->fetch(PDO::FETCH_OBJ)) {
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
  print "Erreur !: " . $e->getMessage() . "<br/>";
  die();
}

$dbh = null;
include './footer_fournisseur.php';
