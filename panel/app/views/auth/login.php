<div class="modal-content">
	<div class="login__title">
		<h1>Iniciar sesión</h1>
	</div>
	<?php echo $form ?>
</div>

<script>
(function() {
	$('.message').message();

	$('.form').on('submit', function() {
		$(this).addClass('loading');
	});
	$('.modal-content').center(48);
})();
</script>