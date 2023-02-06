<?php

use App\Http\Controllers\MainController;
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

// Route::get('saints', [MainController::class, 'index']);

// Route::get('saints/saint', [MainController::class, 'show']);
// //come fa a passare id a MainController/show()??
//  Route::resource('/saint/')

Route::resource('saints', MainController::class);
