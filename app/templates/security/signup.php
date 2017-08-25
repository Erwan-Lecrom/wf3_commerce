<?php $this->layout('layout', ['title' => $title]) ?>

<?php $this->start('main_content') ?>
	<form method="post">
		<div>
			<label for="username">Nom Prenom</label>
			<input type="text" name="username" id="username" value="<?= $username ?>">
		</div>		
		<div>
			<label for="email">Adresse mail</label>
			<input type="email" name="email" id="email" value="<?= $email ?>">
		</div>
		<div>
			<label for="password">Mot de passe</label>
			<input type="password"  name="password" id="password">
		</div>
		<div>
			<label for="repeat_password">Repeter les mot de passe</label>
			<input type="password" name="repeat_password" id="repeat_password">
		</div>	
		<button type="submit">Je m'inscris</button>	
	</form>
<?php $this->stop('main_content') ?>
