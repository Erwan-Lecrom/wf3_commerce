<?php $this->layout('layout', ['title' => 'Modification d\'un produit']) ?>

<?php $this->start('main_content') ?>
	<h2>Modification d'un produit</h2>
	<form method="post">
		<!-- Nom du produit -->
		<div>
			<label for="name">Nom du produit</label>
			<input type="text" name="name" id="name" value="<?= $product['name'] ?>">
		</div>
		<!-- URL image -->
		<div>
			<label for="image">Image</label>
			<input type="text" name="image" id="image" value="<?= $product['image'] ?>">
		</div>
		<!-- Description du produit -->
		<div>
			<label for="description">Description du produit</label>
			<textarea id="description" name="description" rows="8" cols="80"><?= $product['description'] ?></textarea>
		</div>
		<!-- Prix du produit -->
		<div>
			<label for="price">Prix</label>
			<input type="text" name="price" id="price" value="<?= $product['price'] ?>">
		</div>
		<button type="submit" name="button">Envoyer</button>
	</form>
<?php $this->stop('main_content') ?>