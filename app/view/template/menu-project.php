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

				<?php if($projectID >1): ?>
					<li>
						<a href="<?php echo PUBLIC_PATH ?>projet/<?php echo $projectID-1?>">Précédent</a>
					</li>
				<?php endif ?>

				<li>
					<a href="<?php echo PUBLIC_PATH ?>">Accueil</a>
				</li>

				<?php if($projectID <5): ?>
				<li>
					<a href="<?php echo PUBLIC_PATH ?>projet/<?php echo $projectID+1?>">Suivant</a>
				</li>
				<?php endif ?>
			</ul>
		</div>
	
</div>