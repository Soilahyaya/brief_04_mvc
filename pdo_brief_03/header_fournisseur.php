<!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css">
   
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>

<div class="boutton_accueil">
<a href="../brief_01_copie/accueil.php">Accueil</a>
<select onchange="la(this.value)">
        <option disabled selected>Selectionner...</option>
        <option value="../brief_01_copie/consultation.php">Afficher les livres</option>
        <?php
        if($_SESSION['admin'] === "1"){
        echo '<option value="../brief_01_copie/ajouter_un_livre.php">Ajouter un livre</option>';
       echo  '<option value="./affiche_fournisseur.php">Afficher les fournisseurs</option>';
       echo '<option value="./ajoute_fournisseur.php">Ajouter un fournisseur</option>';
       echo '<option value="trie.php">par trie</option>';
       
      };    ?>


      </select>
      <?= $_SESSION['nom'] . " " . $_SESSION['prenom'] . ' ' . $_SESSION['admin']; ?>
      <script>
        function la(src) {
          window.location = src;
        }
      </script>
</div>

</header>

    

