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
$app->get('/projet1', function ($request, $response, $args) {
	// Render about view
	return $this->renderer->render($response, 'projet1.php', $args);
})->setName('projet1');

// Projet 2
$app->get('/projet2', function ($request, $response, $args) {
	// Render about view
	return $this->renderer->render($response, 'projet2.php', $args);
})->setName('projet2');

// Projet 1
$app->get('/projet3', function ($request, $response, $args) {
	// Render about view
	return $this->renderer->render($response, 'projet3.php', $args);
})->setName('projet3');