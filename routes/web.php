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

Route::get('/store_trash', function () {
return view('create');
});

Route::post('/store_trash', function () {
    return view('create');
    });




Route::get('/sampah',[SampahController::class,'index']);
Route::post('/sampah/store',[SampahController::class,'store_trash']);
Route::get('/generate-token',[SampahController::class,'generateToken']);
Route::get('/sampah/{id}', [SampahController::class, 'show']);
Route::patch('/sampah/update/{id}',[SampahController::class, 'update']);
Route::delete('/sampah/delete/{id}',[SampahController::class, 'destroy']);
Route::get('/sampah/show/trash', [SampahController::class, 'trash']);
Route::get('/sampah/trash/restore/{id}', [SampahController::class, 'restore']);
Route::get('/sampah/trash/delete/permanent/{id}', [SampahController::class, 'permanenDelete']);
