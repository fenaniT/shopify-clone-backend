<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});
Route::get('/user', function (Request $request) {
    return $request->user();
});

require __DIR__.'/auth.php';
