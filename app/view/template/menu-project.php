<div id="menu-project" class="menu row">
	
		<div class="small-12 medium-6 large-4 columns">
			<a href="<?php echo PUBLIC_PATH ?>">
				<div id="logo">
					<img src="<?= MEDIA_PATH ?>id/logo.png" alt="Logo" />
				</div>
				<div id="name">Laurine Peyrard</div>
			</a>
		</div>

		<div class="small-12 medium-6 large-8 columns text-right">
			<ul>

				<?php if($project >1): ?>
					<li>
						<a href="<?php echo PUBLIC_PATH ?>project/<?php echo $project-1?>">Précédent</a>
					</li>
				<?php endif ?>

				<li>
					<a href="<?php echo PUBLIC_PATH ?>">Accueil</a>
				</li>

				<?php if($project <5): ?>
				<li>
					<a href="<?php echo PUBLIC_PATH ?>project/<?php echo $project+1?>">Suivant</a>
				</li>
				<?php endif ?>
			</ul>
		</div>
	
</div>