<?php $this->layout('layout', ['title' => 'profil']) ?>

<?php $this->start('main_content') ?>
	<div>
		<strong>Nom:</strong><?= $user['username'] ?>
	</div>
		<div>
		<strong>Email:</strong><?= $user['email'] ?>
	</div>
<?php $this->stop('main_content') ?>