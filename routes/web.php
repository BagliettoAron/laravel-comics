<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$comicsData = config('comicsData');

$data = [
    'comics' => $comicsData
];

Route::get('/', function () use ($data) {
    return view('home', $data);
})->name('homePage');

Route::get('comics', function() {
    return view ('comics');
}) -> name ('single_comic');
