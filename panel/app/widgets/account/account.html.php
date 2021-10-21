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

<div class="welcome__settings">
	<p><i class="far fa-user"></i> <?php __($user->firstname()) ?> <?php __($user->lastname()) ?></p>
	<span><i class="far fa-envelope"></i> <?php __($user->email()) ?></span>

	<a href="<?= site()->url(); ?>/panel/logout" class="button" role="button">
		<i class="fas fa-sign-out-alt"></i> Cerrar sesión
	</a>
</div>