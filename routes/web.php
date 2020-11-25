<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;
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

Route::get('tarea', [TareaController::class, 'index'])->name('tareas.index');
Route::post('tarea', [TareaController::class, 'store'])->name('tareas.store');
Route::get('login', function(){
    return view('login');
});