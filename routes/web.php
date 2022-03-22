<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ContactController;
use App\Models\About;
use App\Models\Portofolio;
use App\Models\Service;
use App\Models\Skill;
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
    $uiAbout = About::first();
    $uiSkills = Skill::all();
    $uiPortofolios = Portofolio::all();
    $uiServices = Service::all();
    return view('welcome', compact('uiAbout', 'uiSkills', 'uiPortofolios' ));
});

Route::get('/admin/all', [AdminController::class, 'index']);

Route::get('/admin/{id}/about/edit', [AboutController::class, 'edit']);
Route::put('/admin/{id}/about/update', [AboutController::class,'update']);

Route::get('/admin/skill/create', [SkillController::class, 'create'])->name('create');
Route::post('/admin/skill/store', [SkillController::class, 'store']);
Route::delete('/admin/{id}/skill/delete', [SkillController::class, 'destroy']);

Route::get('/admin/pf/create', [PortofolioController::class, 'create'])->name('create');
Route::post('/admin/pf/store', [PortofolioController::class, 'store']);
Route::delete('/admin/{id}/pf/delete', [PortofolioController::class, 'destroy']);

Route::get('/admin/service/create', [ServiceController::class, 'create'])->name('create');
Route::post('/admin/service/store', [ServiceController::class, 'store']);
Route::delete('/admin/{id}/service/delete', [ServiceController::class, 'destroy']);

Route::get('/admin/testi/create', [TestimonialController::class, 'create'])->name('create');
Route::post('/admin/testi/store', [TestimonialController::class, 'store']);
Route::delete('/admin/{id}/testi/delete', [TestimonialController::class, 'destroy']);

Route::get('/admin/{id}/contact/edit', [ContactController::class, 'edit']);
Route::put('/admin/{id}/contact/update', [ContactController::class,'update']);