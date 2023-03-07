
  <?php session_start(); ?>
  <?php include './header.php'; ?>
<!-- <div class="titre"><h1>Page de consultation des livres</h1></div> -->

<!-- echo '<a href="deconnexion.php"><button>Deconnexion</button></a>'; -->

      <!-- <script>
        function la(src) {
          window.location = src;
        }
      </script>
</div> -->

<?php 
// try {
//     $dbh = new PDO('mysql:host=localhost;dbname=bdp5', 'root', '');

//     // Affiche toutes les infos des livres sous forme de tableau
//     $stmt = $dbh->prepare("SELECT * FROM livres");
//     $stmt->execute();
//     $livres = $stmt->fetchAll();

//     echo "<table border='1'>";
//     echo "<td>" . 'ISBN' . "</td>";
//     echo "<td>" . 'Titre' . "</td>";
//     echo "<td>" . 'Thème' . "</td>";
//     echo "<td>" . 'Nombre de pages' . "</td>";
//     echo "<td>" . 'Format' . "</td>";
//     echo "<td>" . 'Auteur' . "</td>";
//     echo "<td>" . 'Editeur' . "</td>";
//     echo "<td>" . 'Année d\'edition' . "</td>";
//     echo "<td>" . 'Prix' . "</td>";
//     echo "<td>" . 'Langue' . "</td>";

//     foreach ($livres as $livre) {
//         echo "<tr>";
//         echo "<td>" . $livre['ISBN'] . "</td>";
//         echo "<td>" . $livre['Titre'] . "</td>";
//         echo "<td>" . $livre['Theme'] . "</td>";
//         echo "<td>" . $livre['Nb_pages'] . "</td>";
//         echo "<td>" . $livre['Format'] . "</td>";
//         echo "<td>" . $livre['Nom_auteur'] . ' ' . $livre['Prenom_auteur'] . "</td>";
//         echo "<td>" . $livre['Editeur'] . "</td>";
//         echo "<td>" . $livre['Annee_edition'] . "</td>";
//         echo "<td>" . $livre['Prix'] . "</td>";
//         echo "<td>" . $livre['Langue'] . "</td>";
//         if($_SESSION['admin'] === "1"){
//         echo "<td><a href='edite.php?id=".$livre['Id']. "'>modifier</a></td>";
//         echo "<td><a href='delete.php?id=".$livre['Id']."'>supprimer</a></td>";
//         }
//         echo "</tr>";
//     }
//     echo "</table>";

//     $dbh = null;
// } catch (PDOException $e) {
//     print "Erreur !: " . $e->getMessage() . "<br/>";
//     die();
// }
// include './footer.php';
?>
<!-- // _________________________________________________________________ -->

 

<div class="titre"><h1>Page de consultation des livres</h1></div>
<?php echo '<a href="deconnexion.php"><button>Deconnexion</button></a>';?>
<script>
  function la(src) {
    window.location = src;
  }
</script>
</div>
<?php
try {
  $dbh = new PDO('mysql:host=localhost;dbname=bdp5', 'root', '');

  // Affiche toutes les infos des livres sous forme de tableau
  $stmt = $dbh->query("SELECT * FROM livres");
  $livres = $stmt->fetchAll(PDO::FETCH_OBJ);

  echo "<table border='1'>";
  echo "<td>" . 'ISBN' . "</td>";
  echo "<td>" . 'Titre' . "</td>";
  echo "<td>" . 'Thème' . "</td>";
  echo "<td>" . 'Nombre de pages' . "</td>";
  echo "<td>" . 'Format' . "</td>";
  echo "<td>" . 'Auteur' . "</td>";
  echo "<td>" . 'Editeur' . "</td>";
  echo "<td>" . 'Année d\'edition' . "</td>";
  echo "<td>" . 'Prix' . "</td>";
  echo "<td>" . 'Langue' . "</td>";

  foreach ($livres as $livre) {
    echo "<tr>";
    echo "<td>" . $livre->ISBN . "</td>";
    echo "<td>" . $livre->Titre . "</td>";
    echo "<td>" . $livre->Theme . "</td>";
    echo "<td>" . $livre->Nb_pages . "</td>";
    echo "<td>" . $livre->Format . "</td>";
    echo "<td>" . $livre->Nom_auteur . ' ' . $livre->Prenom_auteur . "</td>";
    echo "<td>" . $livre->Editeur . "</td>";
    echo "<td>" . $livre->Annee_edition . "</td>";
    echo "<td>" . $livre->Prix . "</td>";
    echo "<td>" . $livre->Langue . "</td>";
    if($_SESSION['admin'] === "1"){
      echo "<td><a href='edite.php?id=".$livre->Id. "'>modifier</a></td>";
      echo "<td><a href='delete.php?id=".$livre->Id."'>supprimer</a></td>";
    }
    echo "</tr>";
  }
  echo "</table>";

  $dbh = null;
} catch (PDOException $e) {
  print "Erreur !: " . $e->getMessage() . "<br/>";
  die();
}
include './footer.php';
?>




