<?php

    class Model 
    {   // Début de la Classe

        private $bd ;
        
        private static $instance = null ;

        /*
         * Constructeur créant l'objet PDO et l'affectant à $bd
         */
        private function __construct() {  // Fonction qui sert à faire le lien avec la BDD

            $dsn = "mysql:host=localhost;dbname=bdp5"  ;   // Coordonnées de la BDD
            $login = "root" ;   // Identifiant d'accès à la BDD
            $mdp = "" ; // Mot de passe d'accès à la BDD
            $this->bd = new PDO($dsn, $login, $mdp) ;
            $this->bd->query("SET NAMES 'utf8'") ;
            $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;

        }


        // get_model()

        public static function get_model() {    // Fonction qui sert à créer une instance de Model pour l'appeler dans chaque Controller (équivalent de $connex)
            if (is_null(self::$instance))
            {
                self::$instance = new Model() ;
            }
            return self::$instance ;
        }




        public function get_all_livres() {

            $r = $this->bd->prepare("SELECT * FROM livres order by Titre" ) ;
            $r->execute() ;

            return $r->fetchAll(PDO::FETCH_OBJ) ;

        }
        public function get_all_fournisseur() {

            $r = $this->bd->prepare("SELECT * FROM fournisseur order by Raison_sociale" ) ;
            $r->execute() ;

            return $r->fetchAll(PDO::FETCH_OBJ) ;

        }
        public function get_all_connexion() {

            $r = $this->bd->prepare("SELECT * FROM connexion order by Nom" ) ;
            $r->execute() ;

            return $r->fetchAll(PDO::FETCH_OBJ) ;

        }

        // tritement pour un ajoue de livre
        // créer une public function add_livre($livre)
        public function get_add_livre() {
            $ISBN = $_POST["isbn"];
            $Titre = $_POST['titre'];
            $Theme = $_POST['theme'];
            $NombrePages = $_POST['nbpages'];
            $Format = $_POST['format'];
            $Nom = $_POST['nom'];
            $Prenom = $_POST['prenom'];
            $Editeur =$_POST['editeur'];
            $Annee = $_POST['annee'];
            $Prix = $_POST['prix'];
            $Langue = $_POST['langue'];

            // requête préparée en INSERT
            $stmt = $this->bd->prepare("INSERT INTO `livres`(`ISBN`, `Titre`, `Theme`, `Nb_pages`, `Format`, `Nom_auteur`, `Prenom_auteur`, `Editeur`, `Annee_edition`, `Prix`, `Langue`) 
            VALUES (:ISBN, :Titre, :Theme, :Nb_pages, :Format, :Nom_auteur, :Prenom_auteur, :Editeur, :Annee_edition, :Prix, :Langue)");
    
            $stmt->bindParam(':ISBN', $ISBN);
            $stmt->bindParam(':Titre', $Titre);
            $stmt->bindParam(':Theme', $Theme);
            $stmt->bindParam(':Nb_pages', $NombrePages);
            $stmt->bindParam(':Format', $Format);
            $stmt->bindParam(':Nom_auteur', $Nom);
            $stmt->bindParam(':Prenom_auteur', $Prenom);
            $stmt->bindParam(':Editeur', $Editeur);
            $stmt->bindParam(':Annee_edition', $Annee);
            $stmt->bindParam(':Prix', $Prix);
            $stmt->bindParam(':Langue', $Langue);
    
            $stmt->execute();
        }

        // tritement pour un ajoue d'un fournissuer
        public function get_add_fournisseur() {
            $codeFournisseur = $_POST["Code_fournisseur"];
            $raisonSociale = $_POST['Raison_sociale'];
            $rueFournisseur = $_POST['Rue_fournisseur'];
            $codePostal = $_POST['Code_postal'];
            $localite = $_POST['Localite'];
            $pays = $_POST['Pays'];
            $telFournisseur =$_POST['Tel_fournisseur'];
            $urlFournisseur = $_POST['Url_fournisseur'];
            $emailFournisseur = $_POST['Email_fournisseur'];
            $faxFournisseur = $_POST['Fax_fournisseur'];

            // requête préparée en INSERT
            $s = $this->bd->prepare("INSERT INTO  `fournisseur`(`Code_fournisseur`, `Raison_sociale`, `Rue_fournisseur`, `Code_postal`, `Localite`, `Pays`, `Tel_fournisseur`, `Url_fournisseur`, `Email_fournisseur`, `Fax_fournisseur`) 
            VALUES (:Code_fournisseur, :Raison_sociale, :Rue_fournisseur, :Code_postal, :Localite, :Pays, :Tel_fournisseur, :Url_fournisseur, :Email_fournisseur, :Fax_fournisseur)");
    
            $s->bindParam(':Code_fournisseur', $codeFournisseur);
            $s->bindParam(':Raison_sociale', $raisonSociale);
            $s->bindParam(':Rue_fournisseur', $rueFournisseur);
            $s->bindParam(':Code_postal',  $codePostal);
            $s->bindParam(':Localite',$localite);
            $s->bindParam(':Pays', $pays);
            $s->bindParam(':Tel_fournisseur',$telFournisseur);
            $s->bindParam(':Url_fournisseur', $urlFournisseur);
            $s->bindParam(':Email_fournisseur',  $emailFournisseur);
            $s->bindParam(':Fax_fournisseur',  $faxFournisseur);
    
            $s->execute();
        }
            
        
        //    _______________________________
     public function get_all_titre() 
        {
            $r = $this->bd->prepare("SELECT DISTINCT Titre FROM livres");
            $r->execute();
    
            return $r->fetchAll(PDO::FETCH_OBJ);
        }
    
        public function get_all_titre_list()
        {
            $trie = $_POST['Titre'];
            $r = $this->bd->prepare("SELECT * FROM livres WHERE Titre = '$trie'");
            $r->execute();
    
            return $r->fetchAll(PDO::FETCH_OBJ);
        }
        
    //    _______________________________
        public function get_all_auteur() { 
        
        $r = $this->bd->prepare("SELECT DISTINCT Nom_auteur FROM livres");
        $r->execute();
        
            return $r->fetchAll(PDO::FETCH_OBJ);
        }
        
        public function get_all_auteur_list()
        {
            $trie = $_POST['Auteur'];
            $r = $this->bd->prepare("SELECT * FROM livres WHERE Nom_auteur = '$trie'");
            $r->execute();
    
            return $r->fetchAll(PDO::FETCH_OBJ);
        }
        
        //    _______________________________
         public function get_all_raison_sociale() 
            {
                $r = $this->bd->prepare("SELECT DISTINCT Raison_sociale FROM fournisseur");
                $r->execute();
        
                return $r->fetchAll(PDO::FETCH_OBJ);
            }
        
            public function get_all_raison_sociale_list()
            {
                $trie = $_POST['Raison_sociale'];
                $r = $this->bd->prepare("SELECT * FROM fournisseur WHERE Raison_sociale = '$trie'");
                $r->execute();
        
                return $r->fetchAll(PDO::FETCH_OBJ);
            }
            
    }   // Fin de la Classe