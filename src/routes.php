<?php
// Routes

// Home
$app->get('/', function ($request, $response, $args) {
	// Render index view
	return $this->renderer->render($response, 'home.php', $args);
})->setName('home');

// About
$app->get('/about', function ($request, $response, $args) {
	// Render about view
	return $this->renderer->render($response, 'about.php', $args);
})->setName('about');

// Projet 1
$app->get('/projet/{id}', function ($request, $response, $args) {
	// Render about view
	return $this->renderer->render($response, 'project.php', ['id' => $args['id']]);
})->setName('projet');