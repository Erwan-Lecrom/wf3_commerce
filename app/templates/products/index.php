<?php $this->layout('layout', ['title' => 'Liste des produits']) ?>

<?php $this->start('main_content') ?>
	<h2>Liste des produits</h2>
	<?php foreach ($products as $product) : ?>
		<div>
			<a href="<?= $this->url('product_read',['id'=>$product['id']]) ?>"]><?= $product['name']?></a>
			<img src="<?= $product['image'] ?>">
			<p><?= $product['description']?></p>
			<p><?= $product['price']?> €</p>
		</div>
	<?php endforeach; ?>
<?php $this->stop('main_content') ?>