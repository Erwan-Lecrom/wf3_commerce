<?php $this->layout('layout', ['title' => $product['name']]) ?>

<?php $this->start('main_content') ?>
	<h2><?= $product['name'] ?></h2>
	<img src="<?= $product['image'] ?>">
	<p><?= $product['description'] ?></p>
	<p><?= $product['price'] ?> €</p>
	<a href="<?= $this->url('product_edit',['id'=>$product['id']]) ?>"]>>Modifier</a>
	<a href="<?= $this->url('product_delete',['id'=>$product['id']]) ?>"]>>Supprimer</a>
<?php $this->stop('main_content') ?>