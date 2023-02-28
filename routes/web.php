<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/person', function() {
    return view('person', [
        'name' => 'Juan Dela Cruz',
        'age'  => 17,
        'address' => 'Nabua, Camarines Sur',
        'color' => 'blue',
        'siblings' => [
            'Pedro',
            'Maria',
            'Cardo',
            'San Goku',
            'Naruto'
        ]
    ]);
});
