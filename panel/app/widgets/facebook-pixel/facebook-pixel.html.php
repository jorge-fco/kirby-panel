<div class="facebook__pixel">
	<div class="facebook__pixel__container">
		<p>Funcionamiento del píxel de Facebook.</p>
		<p>Un fragmento de código para tu sitio web que te permite medir, optimizar y crear públicos para tus campañas publicitarias.</p>

		<?php if (c::get('facebook_pixel') == true): ?>
			<label><i class="fas fa-lock"></i> Estatus: <data class="is-active">Activado</data></label>
		<?php else: ?>
			<label><i class="fas fa-lock"></i> Estatus: <data class="is-desactive">Desactivado</data></label>
		<?php endif ?>

		<a href="https://business.facebook.com/" target="_blank">
			<i class="fas fa-link"></i> Ir al administrador de anuncios
		</a>
	</div>
</div>