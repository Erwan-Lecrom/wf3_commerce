<?php $this->layout('layout', ['title' => 'Contact']) ?>

<?php $this->start('main_content')?>
	<form method="post">
		<div>
			<label for="name">Votre nom</label>
			<input type="text" name="name" id="name" value="<?= $name ?>">
		</div>
		<div>
			<label for="">Votre email</label>
			<input type="email" name="email" id="email" value="<?= $email ?>">			
		</div>
		<div>
			<label for="message">votre message</label>
			<textarea id="message" name="message" rows="8" cols="80"><?= $message ?></textarea>
		</div>
		<button type="submit">Envoyer</button>
	</form>
<?php $this->stop('main_content')?>
