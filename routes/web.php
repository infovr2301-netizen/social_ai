<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/root', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('landing');
});

Route::get('/home',[HomeController::class,'landing']);