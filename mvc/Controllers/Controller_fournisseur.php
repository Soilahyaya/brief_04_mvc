<?php

class Controller_fournisseur extends Controller
{
	public function action_default()
	{
		$this->action_fournisseur();
	}

	public function action_fournisseur()
	{
		$this->render("fournisseur");
	}
  
    public function action_all_fournisseur()
    {
        $m=Model::get_model();
        $data=["fournisseur"=>$m->get_all_fournisseur()];
        $this->render("all_fournisseur",$data);
    }

// ____________________________________
	// pour ajouter un fournisseur
	public function ajt_fournisseur(){
		$this->render("ajt_fournisseur");
	}

	public function action_ajouter_un_fournisseur()
	{
		// on check si le form a bien été soumis
		if(isset($_POST["submit"])) {
			
			// on appelle le model
			// on récupère le résultat de la requête
			$m = Model::get_model();
			$m->get_add_fournisseur();

			$fournisseur = ["fournisseur" => $m->get_all_fournisseur()];

			// on passe la liste à la vue qui affiche tous les livres
			$this->render("all_fournisseur", $fournisseur);

		}
		$this->render("ajt_fournisseur");
	}

// _________________________________________
	// pour trier par raison sociale
	
	public function action_all_raison_sociale()
    {
        $m = Model::get_model();
        $data = ["raison_sociale" => $m->get_all_raison_sociale()];
        $this->render("all_raison_sociale", $data);
    }

    // Affiche tout les fournisseurs avec la raison sociale choisie
    public function action_all_raison_sociale_list()
    {
        $m = Model::get_model();
        $data = ["fournisseur" => $m->get_all_raison_sociale_list()];
        $this->render("all_raison_sociale_list", $data);
    }	
	



}
?>