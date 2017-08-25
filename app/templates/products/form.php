<form method="post">
		<!-- Nom du produit -->
		<div>
			<label for="name">Nom du produit</label>
			<input type="text" name="name" id="name" value=<?=" $name "?>>
		</div>
		<!-- URL image -->
		<div>
			<label for="image">Image</label>
			<input type="text" name="image" id="image" value=<?=" $image "?>>
		</div>
		<!-- Description du produit -->
		<div>
			<label for="description">Description du produit</label>
			<textarea id="description" name="description" rows="8" cols="80"><?= $description ?></textarea>
		</div>
		<!-- Prix du produit -->
		<div>
			<label for="price">Prix</label>
			<input type="text" name="price" id="price" value="<?= $price ?>">
		</div>
		<button type="submit" name="button">Envoyer</button>
	</form>