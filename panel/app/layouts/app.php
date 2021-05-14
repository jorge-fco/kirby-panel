<!DOCTYPE html>
<html lang="en">
<head>
	<!--META TAGS-->
	<?php echo $meta ?>

	<!--TITLE-->
	<title><?php __($title) ?></title>

	<!--ICONS-->
	<script src="https://kit.fontawesome.com/4643810438.js" crossorigin="anonymous"></script>

	<!--CSS-->
	<?php echo $css ?>
	<?php echo $formcss ?>
	<?php echo $pluginscss ?>

	<?php if($stylesheet = kirby()->option('panel.stylesheet')): ?>
		<?php echo css($stylesheet) ?>
	<?php endif ?>

	<!--JAVASCRIPT-->
	<?php echo $js ?>
	<?php echo $appjs ?>
	<?php echo $formjs ?>
	<?php echo $pluginsjs ?>
	<?php echo $favicon ?>
</head>
<body class="app <?php __($direction) ?>" data-csrf="<?php __($csrf) ?>">
	<div class="main">
		<?php if(isset($topbar))  echo $topbar ?>
		<?php if(isset($content)) echo $content ?>
	</div>
</body>
</html>