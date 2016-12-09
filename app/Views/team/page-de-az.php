<?php $this->layout('layout', ['title' => 'MAGS Team']) ?>

<?php $this->start('main_content') ?>

<h2>MAGS Team page</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Et maintenant, RTFM dans <strong><a href="../docs/tuto/" title="Documentation de W">docs/tuto</a></strong>.</p>
<section>
  <div class="container">
    <!-- Avatar -->
    <div class="row">
      <div class="col-md-push-4 col-md-4">
        <img src="<?= $this->assetUrl('images/az_avatar.png') ?>" alt="AZ Avatar">
        <h2>Adel Zitouni</h2>
      </div>
    </div>
    <!-- Compétences -->
    <!-- CSS -->
    <div class="row">
      <div class="col-sm-6 text-center">
        <div id="css" class="competence">
        </div>
      </div>
      <div class="col-sm-6 text-center">
        <div id="js"  class="competence">
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3 text-center">
        <img class="img-responsive" src="" alt="">
        <div class="intro-text">
          <h1 class="name">Hello !!!</h1>
          <hr class="star-light">
          <span class="skills">Web Developer - Graphic Artist - User Experience Designer</span>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="success" id="competence">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2>Compétences</h2>
        <hr class="star-light">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 text-center">
        <p> <?php echo $presentation;?></p>
        <p> <?php echo $competences;?></p>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2>Me contacter</h2>
        <hr class="star-light">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
        <form class="" method="POST" action="<?= $this->url('contact_traitementForm',['id' => $id])  ?>">
          <div class="contact">
            <label for="nom">Nom : </label>
            <input type="text" name="nom" placeholder="nom" value="">
          </div>
          <br>
          <div class="contact">
            <label for="email">Email : </label>
            <input type="email" name="email" placeholder="email" value="">
          </div>
          <br>
          <div>
            <textarea name="message" rows="8" cols="80" placeholder="Message"></textarea>
          </div>
          <input type="submit" name="" class="btn btn-success" value="Envoyer">

        </form>
      </div>
    </div>
  </div>
</section>

<?php $this->stop('main_content') ?>
