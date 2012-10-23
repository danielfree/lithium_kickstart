<!DOCTYPE html>
<html class="<?php echo \lithium\core\Environment::get(); ?>">
<head>
	<?php echo $this->_render('element', 'head'); ?>
</head>
<body class="app" data-spy="scroll">
	<div class="container">
		<div id="content">
			<?= $this->sessionMessage->renderAll() ?>
			<?= $this->content(); ?>
		</div>
	</div>
	<script type="text/javascript" charset="utf-8">
		head.js(
			"<?php echo $this->url('/js/jquery.min.js'); ?>",
			"<?php echo $this->url('/js/icanhaz.min.js'); ?>",
			"<?php echo $this->url('/js/bootstrap.min.js'); ?>",
			"<?php echo $this->url('/js/bootbox.min.js'); ?>",
			"<?php echo $this->url('/js/moment.min.js'); ?>",
			"<?php echo $this->url('/js/tools.js'); ?>",
			"<?php echo $this->url('/js/app.js'); ?>",
			function() {
				ich.grabTemplates();
			}
		);
	</script>
	<?= $this->_render('element', 'bottom'); ?>
</body>
</html>