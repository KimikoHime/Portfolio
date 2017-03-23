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
					<img src="<?= MEDIA_PATH ?>id/face.png" alt="Illustration représentant un CV" />
				</div>

				<div id="job">
					Design &amp; intégration

					<div>
						<a class="button" href="<?= MEDIA_PATH ?>CV.pdf" target="_blank">
							Télécharger mon CV
						</a>
					</div>
				</div>


				<div id="social">
					<a href="https://fr.linkedin.com/in/laurinepeyrard" target="_blank">
						<img src="<?= MEDIA_PATH ?>graph/linkedin.png" alt="Icône de Linkedin" />
					</a>
					<a href="https://twitter.com/LaurinePeyrard" target="_blank">
						<img src="<?= MEDIA_PATH ?>graph/twitter.png" alt="Icône de Twitter" />
					</a>
					<a href="https://www.instagram.com/kimiko_dayo/" target="_blank">
						<img src="<?= MEDIA_PATH ?>graph/instagram.png" alt="Icône d'Instagram" />
					</a>
				</div>
			</div>



		</div>


		<div class="clear"></div>
		</div>

		<div class="content">
			<div class="container">


				<div class="row project valign wrapper">
					<div class="small-12 medium-6 large-4 columns">
						<div class="title unveil" >
							<a href="<?php echo PUBLIC_PATH ?>projet/0" data-hover="<?= $projects[0]->{'name'} ?>">
								<?= $projects[0]->{'name'} ?>
							</a>
						</div>
						<p><?= $projects[0]->{'description'} ?></p>
					</div>
					<div class="small-12 medium-6 large-8 columns align-right">
						<a href="<?php echo PUBLIC_PATH ?>projet/0" data-hover="<?= $projects[0]->{'name'} ?>">
							<div class="image project1" style="background-image: url('<?= PROJECT_PATH.$projects[0]->{'thumb'} ?>');">
								<div class="filter">
									<span>Voir le projet &#65515;</span>
								</div>
							</div>
						</a>
					</div>
				</div>


				<div class="row project valign middle-project wrapper">
					<div class="small-12 medium-6 large-8 columns align-left">
						<a href="<?php echo PUBLIC_PATH ?>projet/1" data-hover="<?= $projects[1]->{'name'} ?>">
							<div class="image project2" style="background-image: url('<?= PROJECT_PATH.$projects[1]->{'thumb'} ?>');">
								<div class="filter">
									<span>Voir le projet &#65515;</span>
								</div>
							</div>
						</a>
					</div>
					<div class="small-12 medium-6 large-4 columns">
						<div class="title text-right unveil">
							<a href="<?php echo PUBLIC_PATH ?>projet/1" data-hover="<?= $projects[1]->{'name'} ?>">
								<?= $projects[1]->{'name'} ?>
							</a>
						</div>
						<p class="right"><?= $projects[1]->{'description'} ?></p>
					</div>
				</div>



				<div class="row project valign wrapper">
					<div class="small-12 medium-6 large-4 columns">
						<div class="title unveil">
							<a href="<?php echo PUBLIC_PATH ?>projet/2"  data-hover="<?= $projects[2]->{'name'} ?>">
								<?= $projects[2]->{'name'} ?></div>
							</a>
							<p><?= $projects[2]->{'description'} ?></p>
						</div>
						<div class="small-12 medium-6 large-8 columns align-right">
							<a href="<?php echo PUBLIC_PATH ?>projet/2"  data-hover="<?= $projects[2]->{'name'} ?>">
								<div class="image project3" style="background-image: url('<?= PROJECT_PATH.$projects[2]->{'thumb'} ?>');">
									<div class="filter">
										<span>Voir le projet &#65515;</span>
									</div>
								</div>
							</a>
						</div>
					</div>


					<div class="row">
						<hr>
					</div>


					<div class="row" id="thumb-row">
						<a href="<?php echo PUBLIC_PATH ?>projet/3">
							<div class="small-12 medium-6 large-4 columns thumbnail">
								<div class="image project4" style="background-image: url('<?= PROJECT_PATH.$projects[3]->{'thumb'} ?>');">
									<div class="title"><?= $projects[3]->{'name'} ?></div>
								</div>
							</div>
						</a>

						<a href="<?php echo PUBLIC_PATH ?>projet/4">
							<div class="small-12 medium-6 large-4 columns thumbnail" >
								<div class="image project5" style="background-image: url('<?= PROJECT_PATH.$projects[4]->{'thumb'} ?>');">
									<div class="title"><?= $projects[4]->{'name'} ?></div>
								</div>
							</div>
						</a>

						<a href="<?php echo PUBLIC_PATH ?>projet/5">
							<div class="small-12 medium-6 large-4 columns thumbnail" >
								<div class="image project6" style="background-image: url('<?= PROJECT_PATH.$projects[5]->{'thumb'} ?>');">
									<div class="title"><?= $projects[5]->{'name'} ?></div>
								</div>
							</div>
						</a>

					</div>

				</div>
			</div>

			<?php include('template/footer.php') ?>

		</body>
		</html>
