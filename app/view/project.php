<?php 
	include('template/header.php');
	$projectID = $data["id"];
	$project = $projects["$projectID"];
?>

<body>

	<?php include('template/menu-project.php'); ?>

	<div class="content">

	<div id="project" class="padding-top">
		<div class="container">
			<div class="row">
				<div class="small-12 columns">
					<div id="image" style="background-image: url('<?= PROJECT_PATH.$project->{'image'} ?>');">
						<div id="title"><?= $project->{'name'} ?></div>
					</div>
					
				</div>
			</div>

			<div class="row">
				<div class="small-12 columns">
					<div id="description">
						<p><?= $project->{'description'} ?></p>
					</div>
					<div id="infos" class="unveil">
						<a href="<?= $project->{'link'} ?>" data-hover="<?= $project->{'link'} ?>" target="_blank"><?= $project->{'link'} ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	</div>

	<?php include('template/footer.php') ?>

</body>