<?php $this->layout('layout_Admin', ['title' => 'Admin']) ?>

<?php $this->start('main_content') ?>

	<h2>Administration Ajout page</h2>
<form class="" action="<?= $this->url('admin_ajoutPageBDD'); ?>" method="post">
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
  <label for="user">Utilisateur : </label>
  <select type="text" id="user" name="user_id" class="hide">
		<option disable value="null">Aucun</option>
  <?php   foreach ($users as $user) {
         ?><option value="<?php echo $user['id']  ?>"> <?php   echo $user['username']  ?></option>
           <?php
      }
   ?>
 </select>
  <input type="submit" name="submit" value="Ajouter une page">
</form>
<script type="text/javascript">
$function($){
	$('select[name="categorie"]').on('change',function(){
		if ($(this).val() == 'team' {
			$('#select_user').removeClass('hide');
		}
		else {
			$('#select_user').addClass('hide').find('select').val('null');
		}
	})
}
</script>
<?php  ?>



<?php $this->stop('main_content') ?>
