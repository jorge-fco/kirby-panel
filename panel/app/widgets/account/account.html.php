<div class="dashboard-box">
	<a class="dashboard-item"<?php e($read, ' href="' . $user->url() . '"') ?>>
		<div class="welcome__row">
			<div class="welcome__avatar">
				<i class="far fa-smile-beam"></i>
			</div>
			<div class="welcome__username">
				<span>¡Bienvenido <strong><?php __($user->username()) ?></strong>!</span>
			</div>
		</div>
	</a>
</div>