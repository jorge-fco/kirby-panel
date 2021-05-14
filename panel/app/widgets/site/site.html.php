<div class="dashboard-box">
	<a class="dashboard-item" target="_blank" href="<?php echo url() ?>">
	<figure>
		<span class="dashboard-item-icon dashboard-item-icon-with-border">
			<i class="far fa-eye"></i>
		</span>
		<figcaption class="dashboard-item-text"><?php e(url::isAbsolute(url()), url::short(url::idn(url())), url()) ?></figcaption>
	</figure>
	</a>
</div>
