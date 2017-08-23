<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],
		['GET|POST', '/contact', 'Default#contact', 'contact'],

		['GET','/produits','Products#index','products'],
		['GET|POST','/produit/create','Products#create','product_create'],
		['GET','/produit/[i:id]/read','Products#read','product_read'],
		['GET|PUT','/produit/[i:id]/edit','Products#update','product_edit'],
		['GET|DELETE','/produit/[i:id]/delete','Products#delete','product_delete']
			
	);