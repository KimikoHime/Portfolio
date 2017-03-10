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
						Design web et mobile

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
						<div class="title">WhatUWear mobile</div>
						<p>Design de l'interface Android d'une application de gestion de dressing, en collaboration avec le développeur Android. Prototypage dynamique de l'application via Marvel app. Finitions de l'intégration sur mobile via le storyboard et réalisation des visuels de promotion pour le Play Store.</p>
					</div>
					<div class="small-12 medium-6 large-8 columns align-right">
						<div class="image"></div>
					</div>
				</div>
			</a>

			<a href="<?php echo PUBLIC_PATH ?>projet/2">
				<div class="row project valign middle-project">
					<div class="small-12 medium-6 large-8 columns align-left">
						<div class="image"></div>
					</div>
					<div class="small-12 medium-6 large-4 columns">
						<div class="title text-right">WhatUWear web</div>
						<p class="right">Design et intégration responsive des interfaces web liées à l'application mobile : landing promotionnelle de l'application, pages de partage de vêtements et de tenues. Mise en place au sein d'un projet Symfony existant via des données serveur en JSON.</p>
					</div>
				</div>
			</a>

			<a href="<?php echo PUBLIC_PATH ?>projet/3">
				<div class="row project valign">
					<div class="small-12 medium-6 large-4 columns">
						<div class="title">KOA Applications</div>
						<p>Design et intégration du site vitrine des applications mobiles de la famille KOA. Utilisation de Slim PHP pour la structure du site et les routes, du CMS Cockpit pour la gestion dynamique et simplifiée du contenu, et de Foundation pour le responsive.</p>
					</div>
					<div class="small-12 medium-6 large-8 columns align-right">
						<div class="image"></div>
					</div>
				</div>
			</a>
			
			<div class="row">
				<hr>
			</div>
			

			<div class="row" id="thumb-row">
				<a href="<?php echo PUBLIC_PATH ?>projet/4">
					<div class="small-12 medium-6 large-4 columns thumbnail">
						<div class="image">
							<div class="title">Badges</div>
						</div>
					</div>
				</a>

				<a href="<?php echo PUBLIC_PATH ?>projet/5">
					<div class="small-12 medium-6 large-4 columns thumbnail">
						<div class="image">
							<div class="title">Carte de visite</div>
						</div>
					</div>
				</a>

				<a href="<?php echo PUBLIC_PATH ?>projet/6">
					<div class="small-12 medium-6 large-4 columns thumbnail">
						<div class="image">
							<div class="title">Kakemono</div>
						</div>
					</div>
				</a>
			
			</div>

		</div>
	</div>

	<?php include('template/footer.php') ?>

</body>
</html>
