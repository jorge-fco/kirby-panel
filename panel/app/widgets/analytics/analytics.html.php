<?php $analytics = page('analytics'); ?>

<div class="google__analytics">
	<div class="google__analytics__container">
		<p>Google Analytics le permite realizar un seguimiento de los visitantes de su sitio web y genera informes que le ayudarán con su marketing.</p>

		<?php if ($analytics->active_analytics() == 'true'): ?>
			<label><i class="fas fa-chart-pie"></i> Estatus: <data class="is-active">Activado</data></label>
		<?php else: ?>
			<label><i class="fas fa-chart-pie"></i> Estatus: <data class="is-desactive">Desactivado</data></label>
		<?php endif ?>

		<a href="pages/analytics/edit" role="button" class="button">
			<i class="fas fa-link"></i>
			Conectarlo con tu sitio web
		</a>

		<a href="https://analytics.google.com/" target="_blank">
			<i class="fas fa-link"></i>
			Más información sobre Google Analytics
		</a>
	</div>
</div>