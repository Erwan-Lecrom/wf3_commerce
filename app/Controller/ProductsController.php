<?php 

namespace Controller;

use \W\Controller\Controller;
use \Manager\ProductsManager;

class ProductsController extends Controller 
{
	public function index()
	{
		//Instanciation Manager
		$products=new ProductsManager;

		$this->show('products/index',["products"=>$products]);
	}
	public function create()
	{
		$name=null;
		$description=null;
		$price=null;
		$save=null;
		//Recuperation des données 
		if($_SERVER['REQUEST_METHOD'] === "POST")
		{
		$name=$_POST['name'];
		$description=$_POST['description'];
		$price=$_POST['price'];

		//Verification des données

		//Enregistrer les données dans la BDD
			if ($save)
			{
				//instancification du manager
				$product=new ProductsManager;
				$product->insert([
						'name'=>$name,
						'description'=>$description,
						'price'=>$price
					]); 
			}	
		}
		$this->show('products/create',[
				"name"=>$name,
				"description"=>$description,
				"price"=>$price
			]);
	}
	public function read($id)
	{
		$this->show('products/read',["id"=$id]);
	}
	public function update($id)
	{
		$this->show('products/update');
	}
	public function delete($id)
	{
		$this->show('products/delete');
	}
}