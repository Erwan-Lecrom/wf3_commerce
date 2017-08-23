<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\ContactsManager;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
	}
	public function contact()
	{
		$name=null;
		$email=null;
		$message=null;
		$save=true;
		//récuperation des données du formulaire
		if($_SERVER['REQUEST_METHOD'] === "POST")
		{

			$name=$_POST['name'];
			$email=$_POST['email'];
			$message=$_POST['message'];
		
			//Verification des données 


			if($save)
			{
				//Enregistrer les données dans la BDD
				$contact_manager=new ContactsManager;
				$contact_manager->insert([
						"name"=>$name,
						"email"=>$email,
						"message"=>$message
					]);
				//Rediriger l'utilisateur vers la page d'acceuil
				$this->redirectToRoute('home');
			}
		}
		//Afficher la vue
		$this->show('default/contact',[
				"name"=>$name,
				"email"=>$email,
				"message"=>$message
			]);
	}

}