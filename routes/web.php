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
    $text = "Io sono Giorgia, sono una donna, sono una madre, SONO CRISTIANA!!";

    return view('home', [
        'TIK_TOK_TAK' => $text
    ]);
});
