<?php $this->layout('layout', ['title' => 'Liste d\'articles']) ?>

<?php $this->start('main_content') ?>

	<h2>Voulez vous vraiment supprimer "<?= $product['name'] ?>"</h2>
	<form method="post">
		<button type="submit" name="button">Oui</button>
		<a href="<?= $this->url('product_read',["id"=>$product["id"]]) ?>">Non</a>
	</form>
<?php $this->stop('main_content') ?>