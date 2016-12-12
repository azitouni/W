<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?= $this->assetUrl('vendor/font-awesome/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('vendor/bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('vendor/percentageloader/css/jquery.percentageloader-0.1.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
	<title><?= $this->e($title) ?></title>
</head>
<body>
	<div class="container">
		<header>
			<h1>W :: <?= $this->e($title) ?></h1>
			<?php if (isset($_SESSION['user'])): ?>
				<form class="" action="<?= $this->url('admin_deconnexion'); ?>">
					<button type="submit" class="btn btn-danger fa fa-power-off" name="btnOff"></button>
				</form>
			<?php endif; ?>
		</header>
		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
	</div>
	<script src="<?= $this->assetUrl('vendor/jquery/jquery.min.js') ?>"></script>
	<script src="<?= $this->assetUrl('vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
	<script src="<?= $this->assetUrl('js/script.js') ?>"></script>
</body>
</html>
