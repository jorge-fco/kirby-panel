<?php $facebook_pixel = page('pixel'); ?>

<div class="facebook__pixel">
	<div class="facebook__pixel__container">
		<p>Funcionamiento del píxel de Facebook.</p>
		<p>Un fragmento de código para tu sitio web que te permite medir, optimizar y crear públicos para tus campañas publicitarias.</p>

		<?php if ($facebook_pixel->active_facebook_pixel() == 'true'): ?>
			<label><i class="fas fa-cog"></i> Estatus: <data class="is-active">Activado</data></label>
		<?php else: ?>
			<label><i class="fas fa-cog"></i> Estatus: <data class="is-desactive">Desactivado</data></label>
		<?php endif ?>

		<a href="pages/pixel/edit" class="button">
			<i class="fas fa-code"></i>
			Configurar el píxel de Facebook
		</a>

		<a href="https://business.facebook.com/" target="_blank">
			<i class="fas fa-link"></i> Ir al administrador de anuncios
		</a>
	</div>
</div>