<?php include('template/header.php') ?>

<body>

<script>
		particlesJS.load('particles-js', '<?= SCRIPT_PATH ?>particles.json', function() {
		  console.log('callback - particles.js config loaded');
		});
	</script>

	<?php include('template/menu.php') ?>

	<div class="clear"></div>

	<div id="header" class="row">
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
						<a href="https://www.behance.net/peyrardlau9ebb" target="_blank">
							<img src="<?= MEDIA_PATH ?>graph/behance.png" alt="Icône de Behance" />
						</a>
					</div>
				</div>
			</div>
		<!-- </div> -->

	</div>

	<div class="clear"></div>

	<div class="content">
		<div class="container">

			<div class="row project">
				<div class="small-12 medium-6 large-4 columns">
					<div class="title">Android project</div>
					<p>Quinoa +1 bicycle rights, banjo disrupt photo booth kombucha readymade man braid helvetica. Pop-up narwhal flexitarian, farm-to-table street art 3 wolf moon waistcoat ennui iPhone messenger bag deep v yuccie +1. Literally ugh raclette ethical normcore. Single-origin coffee schlitz lomo tousled. </p>
				</div>
				<div class="small-12 medium-6 large-8 columns">
					<div class="image"></div>
				</div>
			</div>

			<div class="row project">
				<div class="small-12 medium-6 large-8 columns">
					<div class="image"></div>
				</div>
				<div class="small-12 medium-6 large-4 columns">
					<div class="title text-right">Web project</div>
					<p class="right">Quinoa +1 bicycle rights, banjo disrupt photo booth kombucha readymade man braid helvetica. Pop-up narwhal flexitarian, farm-to-table street art 3 wolf moon waistcoat ennui iPhone messenger bag deep v yuccie +1. Literally ugh raclette ethical normcore. Single-origin coffee schlitz lomo tousled.</p>
				</div>
			</div>

			<div class="row project">
				<div class="small-12 medium-6 large-4 columns">
					<div class="title">Print</div>
					<p>Quinoa +1 bicycle rights, banjo disrupt photo booth kombucha readymade man braid helvetica. Pop-up narwhal flexitarian, farm-to-table street art 3 wolf moon waistcoat ennui iPhone messenger bag deep v yuccie +1. Literally ugh raclette ethical normcore. Single-origin coffee schlitz lomo tousled. </p>
				</div>
				<div class="small-12 medium-6 large-8 columns">
					<div class="image"></div>
				</div>
			</div>

			<div class="row">
				<hr>
			</div>
			

			<div class="row">
				<div class="small-12 medium-6 large-3 columns thumbnail">
					<div class="image"></div>
				</div>
				<div class="small-12 medium-6 large-3 columns thumbnail">
					<div class="image"></div>
				</div>
				<div class="small-12 medium-6 large-3 columns thumbnail">
					<div class="image"></div>
				</div>
				<div class="small-12 medium-6 large-3 columns thumbnail">
					<div class="image"></div>
				</div>
			
			</div>

		</div>
	</div>

	<?php include('template/footer.php') ?>

</body>
</html>
