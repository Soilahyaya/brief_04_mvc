 <?php

$connex = mysqli_connect('localhost', 'root', '', 'bdp5');

    if(!$connex) {
    //! Erreur de connexion
    echo "<script type=text/javascript>";
    echo "alert('Connexion impossible à la base')</script>";
    }
    else {
    //* Connexion réussie
        echo "<script type=text/javascript>";
        echo "alert('Connexion réussie à la base')</script>";
    }

mysqli_close($connex);

?>