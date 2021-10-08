<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\FormController;

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
})->name('home');

Route::get('/game21', function () {
    return view('game21');
})->name('game21');

Route::get('/dice100', function () {
    return view('dice100');
})->name('dice100');

Route::get('/hello-world', function () {
    echo "Hello World";
});



Route::get('/hello-world-view', function () {
    return view('message', [
        'message' => "Hello World from within a view"
    ]);
});


Route::get('/hello', [HelloWorldController::class, 'hello']);

Route::get('/hello/{message}', [HelloWorldController::class, 'hello']);
Route::get('/hello', 'App\Http\Controllers\HelloWorldController@hello');

Route::get('/form', [FormController::class, 'index']);
Route::post('/form/process', [FormController::class, 'process']);
Route::get('/form/view', [FormController::class, 'view']);
