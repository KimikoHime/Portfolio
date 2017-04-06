<head>
	<meta charset="utf-8"/>
	<title>Laurine Peyrard | Portfolio</title>

	<!-- Style -->
	<link href="<?= STYLE_PATH ?>foundation.min.css" rel="stylesheet" />
	<link href='<?= STYLE_PATH ?>main.css' rel='stylesheet' type='text/css'>

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
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">
</head>

<?php
	$json = file_get_contents("../src/projects.json");
	$projects = json_decode($json);
	$projet1name = $projects[0]->{'name'};
?>
