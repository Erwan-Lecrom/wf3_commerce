<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],
		['GET|POST', '/contact', 'Default#contact', 'contact'],

		['GET','/produits','Products#index','products'],
		['GET|POST','/produit/create','Products#create','product_create'],
		['GET','/produit/[i:id]/read','Products#read','product_read'],
		['GET|POST','/produit/[i:id]/edit','Products#update','product_edit'],
		['GET|POST','/produit/[i:id]/delete','Products#delete','product_delete'],
					
		/*
			User
		*/	
		['GET','/profile','User#index','profile'],
		/*
			Security
		*/	
		['GET|POST','/signin','Security#signin','security_signin'],
		['GET|POST','/signup','Security#signup','security_signup'],
		['GET','/logout','Security#logout','security_logout'],
		['GET|POST','/lost-password','Security#resetpwd','security_reset_pwd']
	
	);