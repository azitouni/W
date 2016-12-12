<?php $this->layout('layout_Admin', ['title' => 'Admin']) ?>

<?php $this->start('main_content') ?>

	<h2>Administration page</h2>
	<?php echo var_dump($_SESSION); ?>
<?php $this->stop('main_content') ?>
