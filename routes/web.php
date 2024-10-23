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
    return view('pages.home', ['comics' => config('comics')]);
});

Route::get('/comic/{id}', function ($id) {
    $comics = config('comics');
    if (isset($comics[$id])) {
        return view('pages.comic', ['comic' => $comics[$id]]);
    } else {
        abort(404);
    }
});
