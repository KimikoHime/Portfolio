<?php 
	include('template/header.php');
	$projectID = $data["id"];
	//$project = $projects["$projectId"];
?>

<body>

	<?php include('template/menu-project.php'); ?>

	<div class="content">

	<div id="project" class="padding-top">
		<div class="container">
			<div class="row">
				<div class="small-12 columns">
					<div id="image">
						<div id="title">Projet <?= $projectID ?></div>
					</div>
					
				</div>
			</div>

			<div class="row">
				<div class="small-12 columns">
					<div id="description">
						<p>Quinoa +1 bicycle rights, banjo disrupt photo booth kombucha readymade man braid helvetica. Pop-up narwhal flexitarian, farm-to-table street art 3 wolf moon waistcoat ennui iPhone messenger bag deep v yuccie +1. Literally ugh raclette ethical normcore. Single-origin coffee schlitz lomo tousled. </p>
					</div>
					<div id="infos">Infos : farm-to-table street art 3 wolf moon</div>
				</div>
			</div>
		</div>
	</div>

	</div>

	<?php include('template/footer.php') ?>

</body>