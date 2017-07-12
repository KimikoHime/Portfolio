<?php

include('template/header.php');
$active = "home";
?>

<body>


	<?php include('template/menu.php') ?>

	<div class="clear"></div>

	<div id="header" class="row wrapper">


		<div class="small-12 medium-6 columns valign full-height">

			<div id="intro">

				

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

				<div id="face">
					<img src="<?= REAL_PATH ?>media/id/face.png" alt="Illustration représentant un CV" />
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

		<div class="small-12 medium-6 columns no-padding">
			<div id="picture">
				<p class="hidden">bg</p>
			</div>
		</div>


		<div class="clear"></div>
	</div>

	<div class="content">
		<div class="container">


			<?php foreach ($projects as $project): ?>

				<div class="row project valign wrapper">

					
					<div class="small-12 medium-6 columns">
						<div class="prompt">
							<div class="title unveil" >
								<a href="<?= REAL_PATH ?>projet/<?= $project->{'id'} ?>" data-hover="<?= $project->{'name'} ?>">
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
					</div>
					

					<div class="small-12 medium-6 columns no-padding">
						<a href="<?= REAL_PATH ?>projet/<?= $project->{'id'} ?>" data-hover="<?= $project->{'name'} ?>">
							<div class="image project1" style="background-image: url('<?= REAL_PATH."media/projects/".$project->{'thumb'} ?>');">
								<div class="filter">
									<span>Voir le projet &#65515;</span>
								</div>
							</div>
						</a>
					</div>
			
				</div>
			<?php endforeach ?>
		</div>


		<!--<div id="footer" class="row unveil">
			Codé sous Atom et avec le <b>&#10084;</b><br/>Slim PHP, Compass et un fichier JSON - <a href="https://github.com/LaurinePeyrard/Portfolio" data-hover="Versionné sur Github" target="_blank">Github</a> <a href="mailto:peyrardlaurine@gmail.com" id="contact" data-hover="Me dire bonjour">Me dire bonjour</a>
		</div>-->

	</div>
</div>

<?php include('template/footer.php') ?>

</body>
</html>
