<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	<link rel="stylesheet" href="<?= $this->assetUrl('vendor/font-awesome/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('vendor/bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/admin_style.css') ?>">
	<script type="text/javascript" src="<?= $this->assetUrl('js/jquery-3.1.1.min.js')  ?>">	</script>
</head>
<body>
	<div class="container">
		<header>
			<h1>W :: <?= $this->e($title) ?></h1>
			<form class="" action="<?= $this->url('admin_deconnexion'); ?>">
				<button type="submit" class="btn btn-danger fa fa-power-off" name="btnOff"></button>
			</form>
		</header>
		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
	</div>


</body>
</html>
