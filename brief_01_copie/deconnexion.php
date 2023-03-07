<?php
session_start();
session_destroy();

header('location: ../connexion_brief_02/index.php');
?>