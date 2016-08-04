<?php
// Routes

$app->get('/', function () {

    // Render index view
    return $this->renderer->render('home.php');
});
