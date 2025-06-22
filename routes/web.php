<?php

use RobertWesner\SimpleMvcPhp\Route;

$server = [
    'uri' => $_SERVER['REQUEST_URI'],
];

Route::get('/', fn () => Route::render('index.twig', ['server' => $server]));
Route::get('/articles/?', fn () => Route::render('articles.twig', ['server' => $server]));

Route::get('/articles/basics/?', fn () => Route::render('articles/basics.twig', ['server' => $server]));
Route::get('/articles/advanced/?', fn () => Route::render('articles/advanced.twig', ['server' => $server]));
Route::get('/articles/semantic-html/?', fn () => Route::render('articles/semantic-html.twig', ['server' => $server]));
Route::get('/articles/social-media-links/?', fn () => Route::render('articles/social-media-links.twig', ['server' => $server]));
Route::get('/articles/forms/?', fn () => Route::render('articles/forms.twig', ['server' => $server]));

Route::get('/articles/aria/label-description/?', fn () => Route::render('articles/aria/label-description.twig', ['server' => $server]));

Route::get('/articles/wcag/?', fn () => Route::render('articles/wcag.twig', ['server' => $server]));
Route::get('/articles/wcag/2-4-1-bypass-blocks/?', fn () => Route::render('articles/wcag/2-4-1-bypass-blocks.twig', ['server' => $server]));

Route::get(Route::FALLBACK, fn () => Route::render('404.twig', status: 404));
