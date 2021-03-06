<?php

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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/table', [App\Http\Controllers\FileController::class, 'table'])->name('table');

// Route::get('{any}', function () {
//     return view('app');
// })->where('any', '.*');
// Route::post('/api/files', [App\Http\Controllers\FileController::class, 'store'])->name('/api/files');
// Route::post('import', [App\Http\Controllers\ImportController::class, 'import'])->name('import');

