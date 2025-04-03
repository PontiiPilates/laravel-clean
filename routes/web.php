<?php

use App\Http\Controllers\PDFMonkeyController;
use App\Http\Controllers\SpController;
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

Route::get('/sp', [SpController::class, 'handle']);

Route::get('/generate', [PDFMonkeyController::class, 'generate']);
Route::get('/fetch', [PDFMonkeyController::class, 'fetch']);
Route::get('/documents', [PDFMonkeyController::class, 'documents']);
