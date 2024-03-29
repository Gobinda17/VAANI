<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/homepage', HomePage::class);
Route::get('/homepage', function() {
    return view('livewire/home-page');
});
