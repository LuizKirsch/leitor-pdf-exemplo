<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pdf-viewer', function () {
    $path = storage_path('app/public/sample.pdf');
    return response()->file($path);
});
