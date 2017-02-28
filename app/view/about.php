<?php include('template/header.php') ?>

<body>

	<?php include('template/menu.php') ?>

	<div id="banner" class="row padding-top">
		<div class="container">
			<div class="small-12 columns">
				<div class="title">A propos</div>
			</div>
		</div>
	</div>

	<div class="content">

		<div class="container">

			<div id="about" class="row">
				<div class="small-12 medium-6 large-4 columns">
					<div id="photo">
						<img src="<?= MEDIA_PATH ?>photo.jpg" alt="Photographie" />
					</div>
				</div>

				<div class="small-12 medium-6 large-8 columns">
					<div class="intro">Enchantée ! Moi c'est Laurine</div>
					<p>Je suis une jeune <b>designer web</b> actuellement en poste sur Annecy. Je m'intéresse à toutes sortes de projets mais je fais majoritairement des <b>interfaces web et mobiles</b>, des visuels de communication, des icônes et du print.</p>
					<p>Ex-développeuse web, j'ai enfin trouvé ma vraie passion, ce qui ne m'empêche pas d'intégrer mes maquettes web responsive ainsi que d'aider à l'esthétique des projets mobiles sur lesquels je travaille actuellement :).</p>
				</div>
			</div>

			<div id="more" class="row">
				<div id="facts" class="small-12 medium-6 large-4 columns">
					<div class="tag grey">Stupid facts</div>
					<ul>
						<li>Change radicalement de couleur de cheveux tous les 3 mois</li>
						<li>A totalement renoncé à traquer les poils de chiens sur ses vêtements</li>
						<li>Bois 2L de thé vert par jour</li>
						
					</ul>
				</div>

				<div class="small-12 medium-6 large-8 columns">

					<div class="row">
						<div class="small-12 medium-6 large-6 columns">
							<div class="tag">Intérêts</div>
							<ul>
								<li>Design thinking &amp; UX</li>
								<li>Photographie (instagram + unsplash),</li>
								<li>Ecriture (contenu interne + medium),</li>
							</ul>
						</div>

						<div class="small-12 medium-6 large-6 columns">
							<div class="tag">Hobbies</div>
							<ul>
								<li>Sport : musculation, danse, escalade bloc</li>
								<li>Loisirs créatifs &amp; manuels</li>
								<li>Pâtisserie</li>
							</ul>

						</div>
					</div>

					
				</div>
			</div>

		</div>

		<?php include('template/footer.php') ?>

	</body>

