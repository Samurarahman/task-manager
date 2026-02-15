<?php

use App\Http\Controllers\TaskController;

Route::resource('tasks', TaskController::class);

Route::get('/', function () {
    return view('welcome');
});
