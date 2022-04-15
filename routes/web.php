<?php

use App\Http\Controllers\KerjasamaController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Aplication', function () {
    return view('Aplication');
});
Route::get('/Article', function () {
    return view('Article');
});

Route::get('/Contact', function () {
    return view('Contact');
});

Route::get('/FormKerjasama', [KerjasamaController::class, 'index']);
Route::post('/FormKerjasama', [KerjasamaController::class, 'store']);

// Route::get('/FormKerjasama', function () {
//     return view('FormKerjasama');
// });