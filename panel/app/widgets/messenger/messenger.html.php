<?php $messenger = page('messenger'); ?>

<div class="messenger__widgets">
	<div class="messenger__widgets__container">
		<p>
			Messenger permite que los clientes se comuniquen con tu empresa sin tener que permanecer en espera ni repetir los mismos problemas a varios agentes de atención al cliente.
		</p>

		<?php if ($messenger->active_messenger() == 'true'): ?>
			<label><i class="fas fa-chart-pie"></i> Estatus: <data class="is-active">Activado</data></label>
		<?php else: ?>
			<label><i class="fas fa-chart-pie"></i> Estatus: <data class="is-desactive">Desactivado</data></label>
		<?php endif ?>

		<a href="pages/messenger/edit" role="button">
			<i class="fas fa-link"></i>
			Conectarlo con tu sitio web
		</a>
	</div>
</div>