<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PortofolioController;
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

Route::get('/admin/all', [AdminController::class, 'index']);

Route::get('/admin/{id}/about/edit', [AboutController::class, 'edit']);
Route::put('/admin/{id}/about/update', [AboutController::class,'update']);

Route::get('/admin/{id}/skill/create', [SkillController::class, 'create'])->name('create');
Route::post('/admin/{id}/skill/store', [SkillController::class, 'store']);
Route::delete('/admin/{id}/skill/delete', [SkillController::class, 'destroy']);

Route::get('/admin/{id}/pf/create', [PortofolioController::class, 'create'])->name('create');
Route::post('/admin/{id}/pf/store', [PortofolioController::class, 'store']);
Route::delete('/admin/{id}/pf/delete', [PortofolioController::class, 'destroy']);

Route::get('/admin/{id}/service/create', [ServiceController::class, 'create'])->name('create');
Route::post('/admin/{id}/service/store', [ServiceController::class, 'store']);
Route::delete('/admin/{id}/service/delete', [ServiceController::class, 'destroy']);