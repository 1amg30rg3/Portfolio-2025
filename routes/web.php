<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Main/Index');
});

Route::get('/test', function () {
    return "Test Page";
})->name("testPage");
