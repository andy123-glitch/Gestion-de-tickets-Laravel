<?php

use App\Http\Controllers\BiensController;
use App\Http\Controllers\TicketsController;
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
Route::get('/Biens', [BiensController::class,'index'])->name('bien.index');
Route::get('/Biens/ajouter', [BiensController::class,'create'])->name('biens.create');
Route::post('/Biens', [BiensController::class,'BiensController@store'])->name('biens.store');
Route::get('/Tickets', [TicketsController::class,'index'])->name('ticket.index');

Route::get('/', function () {
    return view('welcome');
});
