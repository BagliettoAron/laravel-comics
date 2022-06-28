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


Route::get('/comic/{id}', function ($id) use ($comicsData) {
    // $comic = collect(config('comics'));
    $current_comic = $comicsData->where('id', $id);
    
    dd($current_comic);
    
    
    return view('comic', $comicsData);
})->name('comic');
