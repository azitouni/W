<?php $this->layout('layout_Admin', ['title' => 'Connect']) ?>

<?php $this->start('main_content') ?>
  <h2>Administration - connexion</h2>
	<form class="" action="<?= $this->url('admin_traitementConnexion'); ?>" method="post">
    <label for="identifiant">Identifiant : </label>
    <input type="text" id="identifiant" name="identifiant">
    <label for="password">Mot de passe : </label>
    <input type="password" id="password" name="password">
	  <button type="submit" name="button" class="btn btn-success"> Connexion </button>
	</form>
<?php $this->stop('main_content') ?>
