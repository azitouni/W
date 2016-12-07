<?php $this->layout('layout', ['title' => 'Inscription']) ?>

<?php $this->start('main_content') ?>
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <form class="form-inline" action="<?= $this->url('default_traitementInscription')  ?>" method="post">
          <div class="form-group">
            <label for="username">Nom : </label>
            <input type="text" class="form-control" id="username" name="username" placeholder="John Doe" value="">
          </div>
          <div class="form-group">
            <label for="email">Email : </label>
            <input type="text" class="form-control" id="email" name="email" placeholder="JohnDoe@toto.fr" value="">
          </div>
          <div class="form-group">
            <label for="password">Mot de passe : </label>
            <input name="password" id="password" id="password" placeholder="">
          </div>
          <button type="submit" id="inscription" class="btn btn-default">S'Inscrire</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php $this->stop('main_content') ?>
