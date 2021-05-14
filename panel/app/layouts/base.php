<!DOCTYPE html>
<html lang="en">
<head>
	<!--META TAGS-->
	<?php echo $meta ?>

	<!--TITLE-->
	<title><?php __($title) ?></title>

	<!--FAVICON-->
	<?php echo $favicon ?>

	<!--CSS-->
	<?php echo $css ?>

	<?php if($stylesheet = kirby()->option('panel.stylesheet')): ?>
		<?php echo css($stylesheet) ?>
	<?php endif ?>

	<!--JAVASCRIPT-->
	<?php echo $js ?>
	<script src="https://kit.fontawesome.com/4643810438.js" crossorigin="anonymous"></script>
</head>
<body class="app <?php __($direction) ?> <?php __($bodyclass) ?>">
	<?php echo $content ?>
</body>
</html>