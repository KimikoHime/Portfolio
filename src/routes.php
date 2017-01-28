<?php
// Routes

$app->get('/', function ($request, $response, $args) {
   
	// Render index view
	return $this->renderer->render($response, 'home.php', $args);
})->setName('home');

$app->get('/about', function ($request, $response, $args) {
   
	// Render index view
	return $this->renderer->render($response, 'about.php', $args);
})->setName('about');
