<?php

use App\Http\Controllers\DataController;
use App\Models\Data;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [DataController::class, 'index']) -> name ('data');

Route::get('/detail/{id}', [DataController::class, 'show']) -> name ('detail');

Route::get('/team', function () {
    return view('team');
})->name('team');


