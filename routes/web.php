<?php

use App\Http\Controllers\EmployeController;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\PostulerController;
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
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('auth.login');
});

Route::resource('employes',EmployeController::class);

Route::resource('offre',OffreController::class);

Route::resource('postuler',PostulerController::class);

Route::get('/postuler', [PostulerController::class, 'index'])->name('postuler.index');
Route::post('/postuler', [PostulerController::class, 'store'])->name('postuler.store');
Route::put('/postuler/{postuler}', [PostulerController::class, 'update'])->name('postuler.update');
Route::delete('/postuler/{postuler}', [PostulerController::class, 'destroy'])->name('postuler.destroy');
Route::get('/postuler/{postuler}', [PostulerController::class, 'edit'])->name('postuler.edit');



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



