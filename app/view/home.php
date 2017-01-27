<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Laurine Peyrard</title>

	<!-- Style -->
	<link href="<?= STYLE_PATH ?>foundation.min.css" rel="stylesheet" />
	<link href='<?= STYLE_PATH ?>main.css' rel='stylesheet' type='text/css'>
	<link href='<?= REAL_PATH ?>vendor/IconHoverEffects/css/component.css' rel='stylesheet' type='text/css'>

	<script type="text/javascript" src="<?= REAL_PATH ?>vendor/IconHoverEffects/js/component.js"></script>
	<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

	<script>
		particlesJS.load('particles-js', '<?= SCRIPT_PATH ?>particles.json', function() {
		  console.log('callback - particles.js config loaded');
		});
	</script>

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?= MEDIA_PATH ?>favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?= MEDIA_PATH ?>favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?= MEDIA_PATH ?>favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?= MEDIA_PATH ?>favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?= MEDIA_PATH ?>favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?= MEDIA_PATH ?>favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?= MEDIA_PATH ?>favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?= MEDIA_PATH ?>favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?= MEDIA_PATH ?>favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?= MEDIA_PATH ?>favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= MEDIA_PATH ?>favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= MEDIA_PATH ?>favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= MEDIA_PATH ?>favicon/favicon-16x16.png">
	<link rel="manifest" href="<?= MEDIA_PATH ?>favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?= MEDIA_PATH ?>favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|Dosis:300,400,500,600,700' rel='stylesheet' type='text/css'>
</head>

<body>

	<div id="menu" class="row">
		<div class="container">
			<div class="small-12 medium-6 large-4 columns">
				<div id="logo">
					<img src="<?= MEDIA_PATH ?>id/logo.png" alt="Logo" />
				</div>
				<div id="name">Laurine Peyrard</div>
			</div>

			<div class="small-12 medium-6 large-8 columns text-right">
				<ul>
					<li>
						<a href="">Portfolio</a>
					</li>
					<li>
						<a href="">A propos</a>
					</li>
					<li>
						<a href="">CV</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

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

	<div id="content">
		<div class="container">

			<div class="row" class="project">
				<div class="small-12 medium-6 large-4 columns">
					<div class="title">Android project</div>
					<p>Quinoa +1 bicycle rights, banjo disrupt photo booth kombucha readymade man braid helvetica. Pop-up narwhal flexitarian, farm-to-table street art 3 wolf moon waistcoat ennui iPhone messenger bag deep v yuccie +1. Literally ugh raclette ethical normcore. Single-origin coffee schlitz lomo tousled. </p>
				</div>
				<div class="small-12 medium-6 large-8 columns">
					<div class="image"></div>
				</div>
			</div>

			<div class="row" class="project">
				<div class="small-12 medium-6 large-8 columns">
					<div class="image"></div>
				</div>
				<div class="small-12 medium-6 large-4 columns">
					<div class="title">Web project</div>
					<p>Quinoa +1 bicycle rights, banjo disrupt photo booth kombucha readymade man braid helvetica. Pop-up narwhal flexitarian, farm-to-table street art 3 wolf moon waistcoat ennui iPhone messenger bag deep v yuccie +1. Literally ugh raclette ethical normcore. Single-origin coffee schlitz lomo tousled.</p>
				</div>
			</div>

			<div class="row" class="project">
				<div class="small-12 medium-6 large-4 columns">
					<div class="title">Print</div>
					<p>Quinoa +1 bicycle rights, banjo disrupt photo booth kombucha readymade man braid helvetica. Pop-up narwhal flexitarian, farm-to-table street art 3 wolf moon waistcoat ennui iPhone messenger bag deep v yuccie +1. Literally ugh raclette ethical normcore. Single-origin coffee schlitz lomo tousled. </p>
				</div>
				<div class="small-12 medium-6 large-8 columns">
					<div class="image"></div>
				</div>
			</div>


			<hr>

			<div class="row">
				<div class="small-12 medium-6 large-4 columns thumbnail">
					<div class="image"></div>
				</div>
				<div class="small-12 medium-6 large-4 columns thumbnail">
					<div class="image"></div>
				</div>
				<div class="small-12 medium-6 large-4 columns thumbnail">
					<div class="image"></div>
				</div>
			</div>

		</div>
	</div>

	<footer>
		<script src="<?= SCRIPT_PATH ?>jquery.js"></script>
		<script src="<?= SCRIPT_PATH ?>what-input.js"></script>
		<script src="<?= SCRIPT_PATH ?>foundation.min.js"></script>
	</footer>

</body>
</html>
