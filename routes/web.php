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

//// Just quickly load a view:
// Route::get('users', function() {
//     return view('users.index');
// });

Route::get('users', 'UsersController@index');
Route::post('users', 'UsersController@store');