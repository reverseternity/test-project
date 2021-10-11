<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\JokeController;
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
    return view('welcome');
});

Route::get('/greeting', [HelloController::class, 'show']);

Route::post('/write', function (Request $request){});

Route::get('/showtable', [JokeController::class, 'show']);

Route::resource('projects', ProjectsController::class);
