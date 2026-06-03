<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasyarakatController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('masyarakat', MasyarakatController::class);