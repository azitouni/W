<?php $this->layout('layout_Admin', ['title' => 'Admin']) ?>

<?php $this->start('main_content') ?>

	<h2>Administration Ajout page</h2>
<form id="form" data-url="<?= $this->url('admin_ajoutPageBDD'); ?>">
  <label for="titre">Titre : </label>
  <input type="text" id="titre" name="titre">
  <label for="categorie">Categorie : </label>
  <select id="categorie" name="categorie">
		<?php  foreach ($categories as $categorie) {
		?><option value="<?= $categorie; ?>"><?= $categorie; ?></option>
		<?php } ?>

	</select>
  <label for="presentation">Presentation : </label>
  <input type="text" id="presentation" name="data[presentation]">
  <label for="competences">Competences : </label>
  <input type="text" id="competences" name="data[competences]">
	<div id="team_fields">
		<div>
			<label for="User">Utilisateur : </label>
			<select type="text" id="User" name="user_id" class="hide">
				<option disable value="null">Aucun</option>
		  <?php   foreach ($users as $user) {
		         ?><option value="<?php echo $user['id']  ?>"> <?php   echo $user['username']  ?></option>
		           <?php
		      }
		   ?>
		 </select>
		</div>
		<div>
			<input type="file" name="fichier">
		</div>
	</div>
  <input id="subBtn" type="submit" name="submit" value="Ajouter une page">
</form>
<script type="text/javascript" src="<?= $this->assetUrl('js/script.js')  ?>"></script>
<?php  ?>



<?php $this->stop('main_content') ?>
