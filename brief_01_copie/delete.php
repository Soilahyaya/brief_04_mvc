
<?php 
try { 
    $conn = new PDO ('mysql:host=localhost;dbname=bdp5','root',''); 
    $conn->query ("SET NAMES 'utf8'");
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}

catch (PDOException $e) {
    // On termine le script en affichant le code de l'erreur et le message
    die ('<p> Echec de connexion. Erreur ['.$e->getCode().') : ' . $e->getMessage() .' </p> ') ;

}

$id = $_GET['id'];
$sql ="DELETE from livres WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

//$sql ='DELETE from bd_livres WHERE numero=5';
header("Location: consultation.php");

?>

