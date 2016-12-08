<?php $this->layout('layout', ['title' => 'Contact']) ?>

<?php $this->start('main_content') ?>
<?php if(isset($erreur)  && $erreur==true){ ?>
  <h2 style="color:red;">Erreur serveur mail, Votre email n'a pas été transmis</h2>
  <code>
    <?php echo $data; ?>
  </code>
<?php } ?>
<?php if(isset($erreur) && $erreur==false) {?>
  <h2 style="color:green;">Votre message a bien été envoyé</h2>
  <code>
    <?php echo var_dump($data); ?>
  </code>
<?php } ?>
	<h2>Contact</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<p>Et maintenant, RTFM dans <strong><a href="../docs/tuto/" title="Documentation de W">docs/tuto</a></strong>.</p>
  <form class="" method="post" action="<?= $this->url('contact_traitementForm_team')  ?>">
    <label for="nom">Nom : </label>
    <input type="text" name="nom" placeholder="nom" value="">
    <label for="email">Email : </label>
    <input type="email" name="email" placeholder="email" value="">
    <label for="message">Message : </label>
    <textarea name="message" rows="8" cols="80" placeholder="Message"></textarea>
    <input type="submit" name="" value="Envoyer">
  </form>

<?php $this->stop('main_content') ?>
