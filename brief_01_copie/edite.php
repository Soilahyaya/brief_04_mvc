<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css">
</head>
<body>
<?php
// Connect to database using PDO
$dsn = 'mysql:host=localhost;dbname=bdp5';
$username = 'root';
$password = '';

try {
    $conn = new PDO($dsn, $username, $password);
    // Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$Id = $_GET['id'];

// Select book data from database using prepared statement
$stmt = $conn->prepare("SELECT * FROM `livres` WHERE Id=:id");
$stmt->bindParam(':id', $Id);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_OBJ);
?>

<form action="update.php?id=<?= $Id ?>" method="post">
    <table>
        <tr>
            <td>ISBN</td>
            <td><input type="text" name="isbn" id="isbn" required value="<?= $row->ISBN ?>"></td>
        </tr>
        <tr>
            <td>Titre</td>
            <td><input type="text" name="titre" id="titre" value="<?= $row->Titre ?>"></td>
        </tr>
        <tr>
            <td>Theme</td>
            <td><input type="text" name="theme" id="theme" value="<?= $row->Theme ?>"></td>
        </tr>
        <tr>
            <td>Nb page</td>
            <td><input type="number" name="nbpages" id="nbpages" value="<?= $row->Nb_pages ?>"></td>
        </tr>
        <tr>
            <td>Format</td>
            <td><input type="text" name="format" id="format" value="<?= $row->Format ?>"></td>
        </tr>
        <tr>
            <td>Nom auteur</td>
            <td><input type="text" name="nom" id="nom" required value="<?= $row->Nom_auteur ?>"></td>
        </tr>
        <tr>
            <td>Prenom auteur</td>
            <td><input type="text" name="prenom" id="prenom" value="<?= $row->Prenom_auteur ?>"></td>
        </tr>
        <tr>
            <td>Editeur</td>
            <td><input type="text" name="editeur" id="editeur" value="<?= $row->Editeur ?>"></td>
        </tr>
        <tr>
            <td>Annee edition</td>
            <td><input type="year" name="annee" id="annee" value="<?= $row->Annee_edition ?>"></td>
        </tr>
        <tr>
            <td>Prix</td>
            <td><input type="price" name="prix" id="prix" value="<?= $row->Prix ?>"></td>
        </tr>
        <tr>
            <td>Langue</td>
            <td><input type="text" name="langue" id="langue"value="<?= $row->Langue ?>"></td>
            </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Modifier"></td>
        </tr>
            </table>
</form>

</body>
</html>