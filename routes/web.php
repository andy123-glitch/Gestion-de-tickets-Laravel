<?php

use App\Http\Controllers\BiensController;
use App\Http\Controllers\CommentaireController;
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

Route::get('/user/Biens', [BiensController::class, 'index'])->name('biens.index');
Route::get('/user/Biens/{id}', [BiensController::class, 'show'])->name('biens.show')->whereNumber('id');
Route::get('/admin/Biens/{id}', [BiensController::class, 'show'])->name('biens.showAdmin')->whereNumber('id');



Route::get('/admin/Biens', [BiensController::class, 'index'])->name('biens.indexAdmin');
Route::get('/admin/Biens/delete/{id}', [BiensController::class, 'delete'])->name('biens.delete')->whereNumber('id');
Route::get('/admin/Biens/add', [BiensController::class, 'create'])->name('biens.create');
Route::post('/admin/Biens', [BiensController::class, 'store'])->name('biens.store');
Route::get('/admin/Biens/update/{id}', [BiensController::class, 'updateView'])->name('biens.updateView')->whereNumber('id');
Route::post('/admin/Biens/update', [BiensController::class, 'updateData'])->name('biens.updateData');


Route::get('/user/Tickets', [TicketsController::class, 'index'])->name('tickets.index');
Route::get('/user/Tickets/close/{idTicket}', [TicketsController::class, 'close'])->name('tickets.close')->whereNumber('idTicket');
Route::prefix('admin')->group(function () {
    Route::get('/Tickets/updateState/{idTicket}', [TicketsController::class, 'updateStateView'])->name('tickets.updateStateView')->whereNumber('idTicket');
    Route::post('/Tickets/updateState', [TicketsController::class, 'updateStateStore'])->name('tickets.updateStateStore');
    Route::get('/Tickets', [TicketsController::class, 'index'])->name('tickets.indexAdmin');
    Route::get('/Tickets/add', [TicketsController::class, 'create'])->name('tickets.create');
    Route::post('/Tickets', [TicketsController::class, 'store'])->name('tickets.store');


});

Route::get('/Commentaires/add/{idTicket}', [CommentaireController::class, 'create'])
    ->name('commentaires.create')
    ->whereNumber('idTicket');
Route::post('/Commentaires', [CommentaireController::class, 'store'])->name('commentaires.store');
Route::get('/Commentaires/{idTicket}', [CommentaireController::class, 'show'])->name('commentaires.show')->whereNumber('idTicket');
Route::get('/Commentaires', [CommentaireController::class, 'index'])->name('commentaires.index');





Route::get('/', function () {
    return view('welcome');
});