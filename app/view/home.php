<?php

	include('template/header.php');
	$active = "home";
?>

<body>


	<?php include('template/menu.php') ?>

	<div class="clear"></div>

	<div id="header" class="row wrapper">

		<div class="small-12 medium-6 large-8 columns align-left">
			<div id="picture">
				<p class="hidden">bg</p>
			</div>
		</div>


		<div class="small-12 medium-6 large-4 columns valign full-height">

			<div id="intro">

				<div id="face">
					<img src="<?= REAL_PATH ?>media/id/face.png" alt="Illustration représentant un CV" />
				</div>

				<div id="job">
					Design &amp; intégration

					<div>
						<a class="button" href="<?= REAL_PATH ?>public/media/CV.pdf" target="_blank">
							CV
						</a>
						<a class="button" href="<?= REAL_PATH ?>media/CV.pdf" target="_blank">
							Book
						</a>
						<a class="button" href="mailto:peyrardlaurine@gmail.com" target="_blank">
							Mail
						</a>
					</div>
				</div>


				<div id="social">
					<a href="https://fr.linkedin.com/in/laurinepeyrard" target="_blank">
						<img src="<?= REAL_PATH ?>media/graph/linkedin.png" alt="Icône de Linkedin" />
					</a>
					<a href="https://twitter.com/LaurinePeyrard" target="_blank">
						<img src="<?= REAL_PATH ?>media/graph/twitter.png" alt="Icône de Twitter" />
					</a>
					<a href="https://www.instagram.com/kimiko_dayo/" target="_blank">
						<img src="<?= REAL_PATH ?>media/graph/instagram.png" alt="Icône d'Instagram" />
					</a>
				</div>
			</div>



		</div>


		<div class="clear"></div>
		</div>

		<div class="content">
			<div class="container">


				<?php foreach ($projects as $project): ?>


					<div class="row project valign wrapper <?= $project->{'id'}%2==0?'':'even' ?>">

						<?php if($project->{'id'}%2 == 0): ?>
							<div class="small-12 medium-6 large-4 columns">
								<div class="title unveil" >
									<a href="<?= PUBLIC_PATH ?>projet/<?= $project->{'id'} ?>" data-hover="<?= $project->{'name'} ?>">
										<?= $project->{'name'} ?>
									</a>
								</div>
								<div class="tags">
									<?php foreach ($project->{'tags'} as $tag): ?>
										<span class="tag"><?= $tag->{'name'} ?></span>
									<?php endforeach ?>
								</div>
								<div class="info">
									<?= $project->{'info'} ?>
								</div>
							</div>
						<?php endif ?>


						<div class="small-12 medium-6 large-8 columns
						<?= $project->{'id'}%2==0?'align-right':'align-left' ?>">
							<a href="<?= PUBLIC_PATH ?>projet/<?= $project->{'id'} ?>" data-hover="<?= $project->{'name'} ?>">
								<div class="image project1" style="background-image: url('<?= PROJECT_PATH.$project->{'thumb'} ?>');">
									<div class="filter">
										<span>Voir le projet &#65515;</span>
									</div>
								</div>
							</a>
						</div>

						<?php if($project->{'id'}%2 == 1): ?>
							<div class="small-12 medium-6 large-4 columns">
								<div class="title unveil" >
									<a href="<?= PUBLIC_PATH ?>projet/<?= $project->{'id'} ?>" data-hover="<?= $project->{'name'} ?>">
										<?= $project->{'name'} ?>
									</a>
								</div>
								<div class="tags">
									<?php foreach ($project->{'tags'} as $tag): ?>
										<span class="tag"><?= $tag->{'name'} ?></span>
									<?php endforeach ?>
								</div>
								<div class="info">
									<?= $project->{'info'} ?>
								</div>
							</div>
						<?php endif ?>


					</div>
				<?php endforeach ?>

			</div>
		</div>

		<div id="footer" class="row unveil">
			<hr>

			<div class="small-12 medium-10 columns">
				Codé à la main sous Atom et avec le <b>&#10084;</b>, Slim PHP, Compass et un fichier JSON - <a href="https://github.com/LaurinePeyrard/Portfolio" data-hover="Versionné sur Github" target="_blank">Versionné sur Github</a>
			</div>
			<div class="small-12 medium-2 columns text-right">
				<a href="mailto:peyrardlaurine@gmail.com" data-hover="Me dire bonjour">Me dire bonjour</a>
			</div>
		</div>

		<?php include('template/footer.php') ?>

	</body>
</html>
