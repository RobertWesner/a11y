<?php

use RobertWesner\SimpleMvcPhp\Route;

$server = [
    'uri' => $_SERVER['REQUEST_URI'],
];

Route::get('/', fn () => Route::render('index.twig', ['server' => $server]));
Route::get('/articles/?', fn () => Route::render('articles.twig', ['server' => $server]));

Route::get('/articles/aria/label-description/?', fn () => Route::render('articles/aria/label-description.twig', ['server' => $server]));

Route::get(Route::FALLBACK, fn () => Route::render('404.twig', status: 404));
