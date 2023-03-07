<?php

class Controller_livre extends Controller
{
	public function action_default()
	{
		$this->action_livre();
	}

	// afficher les livres
	public function action_livre()
	{
		$this->render("livre");
	}
  
    public function action_all_livres()
    {
        $m=Model::get_model();
        $data=["livres"=>$m->get_all_livres()];
        $this->render("all_livres",$data);
    }

// ________________________________________________
	// pour ajouter un livre
	public function ajt_un_livre(){
		$this->render("ajt_livres");
	}

	public function action_ajouter_un_livre()
	{
		// on check si le form a bien été soumis
		if(isset($_POST["submit"])) {
			
			// on appelle le model
			// on récupère le résultat de la requête
			$model = Model::get_model();
			$model->get_add_livre();

			$livres = ["livres" => $model->get_all_livres()];

			// on passe la liste à la vue qui affiche tous les livres
			$this->render("all_livres", $livres);
			
		}
		$this->render("ajt_livres");
}
// _________________________________________
	// pour trier par titre
	
	public function action_all_titre()
    {
        $m = Model::get_model();
        $data = ["titre" => $m->get_all_titre()];
        $this->render("all_titre", $data);
    }

    // Affiche tout les livres par titre
    public function action_all_titre_list()
    {
        $m = Model::get_model();
        $data = ["livres" => $m->get_all_titre_list()];
        $this->render("all_titre_list", $data);
    
}
// _______________________________________________
// pour trier par auteur
	
public function action_all_auteur()
{
	$m = Model::get_model();
	$data = ["Auteur" => $m->get_all_auteur()];
	$this->render("all_auteur", $data);
}

// Affiche tout les livres par titre
public function action_all_auteur_list()
{
	$m = Model::get_model();
	$data = ["livres" => $m->get_all_auteur_list()];
	$this->render("all_auteur_list", $data);

}

// _______________________________________________
// pour trier par editeur
	
public function action_all_editeur()
{
	$m = Model::get_model();
	$data = ["editeur" => $m->get_all_editeur()];
	$this->render("all_editeur", $data);
}

// Affiche tout les livres par titre
public function action_all_editeur_list()
{
	$m = Model::get_model();
	$data = ["livres" => $m->get_all_editeur_list()];
	$this->render("all_editeur_list", $data);

}


}



?>