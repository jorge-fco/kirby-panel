<div class="certificate__ssl">
	<div class="certificate__ssl__container">
		<p>¡La seguridad de tu sitio web es muy importante!</p>
		<p>Adquiere y activa tu Certificado SSL. Pregunta al desarrollador para instalarlo de manera segura.</p>

		<?php if (c::get('ssl') == true): ?>
			<label>Estatus: <data class="is-active">Activado</data></label>
		<?php else: ?>
			<label>Estatus: <data class="is-desactive">Desactivado</data></label>
		<?php endif ?>

		<a href="https://mx.godaddy.com/web-security/ssl-certificate" target="_blank">
			<i class="fas fa-lock"></i> ¿Que es un certificado SSL?
		</a>
	</div>
</div>