<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JsonController;

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

Route::controller(JsonController::class)->group(function () {
    Route::get('/laravel-json', 'index');
    Route::post('json-file-download','download')->name('json.store');
});

