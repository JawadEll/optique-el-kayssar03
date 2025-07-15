<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\FactureController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::resource('factures', FactureController::class);

Route::get('/',[FactureController::class, 'index'])->name('factures.index');
Route::get('/create',[FactureController::class, 'create'])->name('factures.create');
Route::post('/',[FactureController::class, 'store'])->name('factures.store');
Route::get('/update/{facture}',[FactureController::class, 'edit'])->name('factures.edit');
Route::put('/{facture}',[FactureController::class, 'update'])->name('factures.update');
Route::delete('/{facture}',[FactureController::class, 'destroy'])->name('factures.destroy');

Route::get('facturePDF/{factureId}', [PDFController::class, 'generatePDF'])->name('facturePDF');
Route::get('/search', [FactureController::class, 'search'])->name('search');