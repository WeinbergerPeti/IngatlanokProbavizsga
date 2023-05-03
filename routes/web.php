<?php

use App\Http\Controllers\IngatlanokController;
use App\Http\Controllers\KategoriakController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get("/ingatlanok", [IngatlanokController::class, "index"]);
Route::get("/ingatlanok/{id}", [IngatlanokController::class, "show"]);
Route::post("/ingatlanok", [IngatlanokController::class, "store"]);
Route::put("/ingatlanok/{id}", [IngatlanokController::class, "update"]);
Route::delete("/ingatlanok/{id}", [IngatlanokController::class, "destroy"]);

Route::get("/kategoriak", [KategoriakController::class, "index"]);
Route::get("/kategoriak/{id}", [KategoriakController::class, "show"]);
Route::post("/kategoriak", [KategoriakController::class, "store"]);
Route::put("/kategoriak/{id}", [KategoriakController::class, "update"]);
Route::delete("/kategoriak/{id}", [KategoriakController::class, "destroy"]);

require __DIR__.'/auth.php';
