<?php $whatsapp = page('whatsapp'); ?>

<div class="whatsapp__widgets">
	<div class="whatsapp__widgets__container">
		<p>
			WhatsApp Business es una aplicación que se puede descargar de manera gratuita, diseñada para atender las necesidades de las pequeñas empresas.
		</p>

		<?php if ($whatsapp->active_whatsapp() == 'true'): ?>
			<label><i class="fas fa-chart-pie"></i> Estatus: <data class="is-active">Activado</data></label>
		<?php else: ?>
			<label><i class="fas fa-chart-pie"></i> Estatus: <data class="is-desactive">Desactivado</data></label>
		<?php endif ?>

		<a href="pages/whatsapp/edit" role="button">
			<i class="fas fa-link"></i>
			Conectarlo con tu sitio web
		</a>
	</div>
</div>