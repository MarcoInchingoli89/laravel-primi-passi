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

Route::get('/', function () {
    return view('home', ['name' => 'Marco'], ['surname' => 'Inchingoli']);
});

Route::get('/contacts', function () {
    $contacts = [
        'name' => 'nome contatto',
        'address' => 'indirizzo contatto',
        'mail' => 'mail contatto'

    ];
    return view('contacts', $contacts);
})->name('contacts');

Route::get('/supports', function () {
    return view('supports', compact('link'));
})->name('supports');