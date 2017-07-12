<div id="menu-project" class="menu row">
	
		<div class="small-12 medium-6 large-4 columns">
			<a href="<?php echo REAL_PATH ?>">
				<div id="logo">
					<img src="<?= REAL_PATH ?>media/id/logo.png" alt="Logo" />
				</div>
				<div id="name">Laurine Peyrard</div>
			</a>
		</div>

		<div class="small-12 medium-6 large-8 columns text-right">
			<div class="unveil">
				<?php if($projectID >1): ?>
					<a href="<?php echo REAL_PATH ?>projet/<?php echo $projectID-1?>" data-hover="Précédent">Précédent</a>
				<?php endif ?>

				<a href="<?php echo REAL_PATH ?>" data-hover="Accueil">Accueil</a>

				<?php if($projectID <5): ?>
					<a href="<?php echo REAL_PATH ?>projet/<?php echo $projectID+1?>" data-hover="Suivant">Suivant</a>
				<?php endif ?>
			</div>
		</div>
	
</div>