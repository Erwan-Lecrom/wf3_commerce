<?php $this->layout('layout', ['title' => 'Liste des produits']) ?>

<?php $this->start('main_content') ?>
	<h2>Liste des produits</h2>
	<?php foreach ($products as $product) : ?>
		<?= $product['title']?>
		<?= $product['description']?>
		<?= $product['price']?>
	<?php endforeach; ?>
<?php $this->stop('main_content') ?>