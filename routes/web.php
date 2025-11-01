<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Index');
});

Route::get('/contact', function () {
    return Inertia::render('Contact');
})->name('contact');

Route::get('/messages', function () {
    return Inertia::render('Messages');
})->name('messages');

Route::get('/about-app', function () {
    return Inertia::render('AboutApp');
})->name('aboutApp');

Route::get('/test', function () {
    return "Test Page";
})->name("testPage");
