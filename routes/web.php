<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
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

Route::get('/', HomeController::class);

Route::controller(CursoController::class)->group(function () {
  Route::get('/cursos', [CursoController::class, 'index'])->name('cursos.index');
  Route::get('/cursos/create', [CursoController::class, 'create'])->name('cursos.create');
  Route::get('/cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');
});
