<?php

use RobertWesner\SimpleMvcPhp\Route;

$server = [
    'uri' => $_SERVER['REQUEST_URI'],
];

Route::get('/', function () use ($server) {
    return Route::render('index.twig', ['server' => $server]);
});

Route::get('/aria/label-description/?', function () use ($server) {
    return Route::render('aria/label-description.twig', ['server' => $server]);
});

Route::get(Route::FALLBACK, function () {
    return Route::render('404.twig', status: 404);
});
