<?php 

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;

class UserController extends Controller 
{
	 private $userManager;

  	public function __construct()
  	{
    	$this->userManager = new UserManager;
    	$this->userManager->setTable('users');

  	}

	public function index () 
	{
		//Controlle de l'acces 
		$user=$this->getUser();
		if (!$user){
			$this->redirectToRoute('security_signin');
		}

		//Controlle de la session
		
		//Récuperation des données de l'utilisateur dans la BDD
		$user=$this->userManager->find($_SESSION['user']['id']);
		//Affichage de la vue profile
		$this->show('users/profile',[
				'user'=>$this->userManager->find($user['id']),
				'title'=>'profile'
			]);
	}
}