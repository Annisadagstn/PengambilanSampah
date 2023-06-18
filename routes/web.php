<?php

use App\Http\Controllers\SampahController;
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

Route::get('/store', function () {
return view('create');
});

Route::post('/store', function () {
return view('create');
});




Route::get('/sampah',[SampahController::class,'index']);
Route::get('/sampah/tambah-data', [SampahController::class, 'create']);
Route::post('/sampah/store',[SampahController::class,'store'])->name("store_trash");
Route::get('/generate-token',[SampahController::class,'generateToken']);
Route::get('/sampah/{id}', [SampahController::class, 'show'])->name('show');
Route::get("/sampah/edit/{id}", [SampahController::class, 'edit'])->name('edit_sampah');
Route::patch('/sampah/update/{id}',[SampahController::class, 'update'])->name('update_sampah');
Route::get('/sampah/delete/{id}',[SampahController::class, 'destroy'])->name('delete_sampah');
Route::get('/sampah/show/trash', [SampahController::class, 'trash'])->name('show_deleted_sampah');
Route::get('/sampah/trash/restore/{id}', [SampahController::class, 'restore'])->name('restore_sampah');
Route::get('/sampah/trash/delete/permanent/{id}', [SampahController::class, 'permanenDelete'])->name('delete_permanent_sampah');
