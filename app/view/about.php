<?php 
	include('template/header.php');
	$active = "about";
?>

<body>

	<?php include('template/menu.php') ?>

	<div class="row padding-top valign">
		<div class="small-12 medium-6 columns">


			<div id="intro">
				<div class="row">
					<div class="title">Enchantée !</div>
					<div class="subtitle">J'ai hâte de travailler avec vous</div>
					<p><b>Designer et intégratrice</b> actuellement en poste sur Annecy, je conçois et met en place des <b>interfaces web et mobiles</b>. Je produis aussi des visuels de communication, des icônes et du print.</p>
				</div>
			
				<div class="row" id="more">

					<div class="small-12 large-6 columns align-left">
						<div class="tag">Intérêts</div>
						<ul>
							<li>Design thinking &amp; UX</li>
							<li>Photographie</li>
							<li>Rédaction</li>
						</ul>
					</div>

					<div class="small-12 large-6 columns align-right">
						<div class="tag special">Hobbies</div>
						<ul>
							<li>Musculation, danse &amp; escalade</li>
							<li>Loisirs créatifs et manuels</li>
							<li>Pâtisserie</li>
						</ul>

					</div>
				</div>
			</div>

			
		</div>
		<div class="small-12 medium-6 columns" id="banner">
			<div class="title">A propos</div>	

			<div id="social">
				<a href="https://fr.linkedin.com/in/laurinepeyrard" target="_blank">
					<img src="<?= REAL_PATH ?>media/graph/linkedin-w.png" alt="Icône de Linkedin" />
				</a>
				<a href="https://twitter.com/LaurinePeyrard" target="_blank">
					<img src="<?= REAL_PATH ?>media/graph/twitter-w.png" alt="Icône de Twitter" />
				</a>
				<a href="https://www.instagram.com/kimiko_dayo/" target="_blank">
					<img src="<?= REAL_PATH ?>media/graph/instagram-w.png" alt="Icône d'Instagram" />
				</a>
				<a href="https://medium.com/@peyrardlaurine" target="_blank">
					<img src="<?= REAL_PATH ?>media/graph/medium-w.png" alt="Icône de Linkedin" />
				</a>
			</div>
		</div>
	</div>

		<?php include('template/footer.php') ?>

	</body>

