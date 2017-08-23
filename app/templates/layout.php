<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
</head>
<body>
	<nav>
		<ul>
			<li><a href="<?= $this->url('products') ?>">Liste des produits</a></li>
			<li><a href="<?= $this->url('product_create') ?>">Ajouter un produit</a></li>
		</ul>
	</nav>
	<div class="container">
		<header>
			<h1>W :: <?= $this->e($title) ?></h1>
		</header>

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
	</div>
</body>
</html>