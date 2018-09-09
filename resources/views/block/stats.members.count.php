<?php use MetaStore\App\Furs\App; ?>

<nav class="level stats-members-count">
	<div class="level-item has-text-centered">
		<div>
			<p class="heading">
				Всего участников
			</p>
			<p>
				<span class="tag is-link is-large">
					<i class="fas fa-user"></i> <?php echo App::getMembersCount(); ?>
				</span>
			</p>
		</div>
	</div>
</nav>

