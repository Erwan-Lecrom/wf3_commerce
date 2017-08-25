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

		$this->show('products/index',["products"=>$products->findAll()]);
	}
	public function create()
	{
		$name=null;
		$image=null;
		$description=null;
		$price=null;
		$save=null;
		//Recuperation des données 
		if($_SERVER['REQUEST_METHOD'] === "POST")
		{
			$save=true;
			$name=$_POST['name'];
			$image=$_POST['image'];
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
						'image'=>$image,
						'description'=>$description,
						'price'=>$price
					]); 
				$this->redirectToRoute('home');
			}	
		}
		$this->show('products/create',[
				'name'=>$name,
				'image'=>$image,
				'description'=>$description,
				'price'=>$price
			]);
	}
	public function read($id)
	{
		//Instanciation du manager
		$read=new ProductsManager;

		$this->show('products/read',["product"=>$read->find($id)]);
	}
	public function update($id)
	{
		//Instanciation du manager
		$update=new ProductsManager;
		$product=$update->find($id);

		//Récuperation des données
		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{
			$save=true;
			$name=$_POST['name'];
			$image=$_POST['image'];
			$description=$_POST['description'];
			$price=$_POST['price'];
			//Enregistrer les nouvelles données dans la BDD
			if ($save)
			{
				$update->update([
					'name'=>$name,
					'image'=>$image,
					'description'=>$description,
					'price'=>$price
				],$product['id']);
			$this->redirectToRoute('product_read',['id'=>$product['id']]);
			}
		}
		$this->show('products/update',["product"=>$product]);

	}
	public function delete($id)
	{
		//instanciation du manager
		$delete=new ProductsManager;
		$product=$delete->find($id);

		if($_SERVER['REQUEST_METHOD'] === "POST")
		{
			$delete->delete($product['id']);
			$this->redirectToRoute('products');
		}
		$this->show('products/delete',['product'=>$product]);
	}
}