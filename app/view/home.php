<?php include('template/header.php') ?>

<body>

	<!--<script>
		/*particlesJS.load('particles-js', '<?= SCRIPT_PATH ?>particles.json', function() {
		  console.log('callback - particles.js config loaded');
		});*/
	</script>-->

	<?php include('template/menu.php') ?>

	<div class="clear"></div>

	<div id="header" class="row padding-top">
		<div id="particles-js"></div>
		<!-- <div class="container"> -->

			<div class="small-12 medium-6 large-8 columns align-left">
				<div id="picture">
					<p class="hidden">bg</p>
				</div>
			</div>

			<div class="small-12 medium-6 large-4 columns">
				

				<!-- <div id="cv"class="hi-icon-wrap hi-icon-effect-4 hi-icon-effect-4b">
					<a href="href="<?= MEDIA_PATH ?>media/CV.pdf"" class="hi-icon">
						<img src="<?= MEDIA_PATH ?>graph/resume.png" alt="Illustration représentant un CV" />
					</a>
				</div> -->

				<div id="intro">

					<div id="face">
						<img src="<?= MEDIA_PATH ?>id/face.png" alt="Illustration représentant un CV" />
					</div>

					<div id="job">
						Graphic design

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
		<!-- </div> -->

	</div>

	<div class="clear"></div>

	<div class="content">
		<div class="container">

			<a href="<?php echo PUBLIC_PATH ?>projet/1">
				<div class="row project valign">
					<div class="small-12 medium-6 large-4 columns">
						<div class="title"><?= $projects[0]->{'name'} ?></div>
						<p><?= $projects[0]->{'description'} ?></p>
					</div>
					<div class="small-12 medium-6 large-8 columns align-right">
						<div class="image project1" style="background-image: url('<?= PROJECT_PATH.$projects[0]->{'thumb'} ?>');"></div>
					</div>
				</div>
			</a>

			<a href="<?php echo PUBLIC_PATH ?>projet/2">
				<div class="row project valign middle-project">
					<div class="small-12 medium-6 large-8 columns align-left">
						<div class="image project2" style="background-image: url('<?= PROJECT_PATH.$projects[1]->{'thumb'} ?>');"></div>
					</div>
					<div class="small-12 medium-6 large-4 columns">
						<div class="title text-right"><?= $projects[1]->{'name'} ?></div>
						<p class="right"><?= $projects[1]->{'description'} ?></p>
					</div>
				</div>
			</a>

			<a href="<?php echo PUBLIC_PATH ?>projet/3">
				<div class="row project valign">
					<div class="small-12 medium-6 large-4 columns">
						<div class="title"><?= $projects[2]->{'name'} ?></div>
						<p><?= $projects[2]->{'description'} ?></p>
					</div>
					<div class="small-12 medium-6 large-8 columns align-right">
						<div class="image project3" style="background-image: url('<?= PROJECT_PATH.$projects[3]->{'thumb'} ?>');"></div>
					</div>
				</div>
			</a>
			
			<div class="row">
				<hr>
			</div>
			

			<div class="row" id="thumb-row">
				<a href="<?php echo PUBLIC_PATH ?>projet/4">
					<div class="small-12 medium-6 large-4 columns thumbnail">
						<div class="image project4">
							<div class="title"><?= $projects[3]->{'name'} ?></div>
						</div>
					</div>
				</a>

				<a href="<?php echo PUBLIC_PATH ?>projet/5">
					<div class="small-12 medium-6 large-4 columns thumbnail">
						<div class="image project5">
							<div class="title"><?= $projects[4]->{'name'} ?></div>
						</div>
					</div>
				</a>

				<a href="<?php echo PUBLIC_PATH ?>projet/6">
					<div class="small-12 medium-6 large-4 columns thumbnail">
						<div class="image project6">
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
