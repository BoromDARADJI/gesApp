<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\NiveauController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ApprenantController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [EtudiantController::class,"index"])->name("etudiant.index");





Route::get('/apprenant',[ApprenantController::class, "index"])->name("apprenant.index");
Route::get('/ajouapp',[App\Http\Controllers\ApprenantController:: class, "create"])->name("apprenant.create");
Route::post('/ajouapp_traitement',[App\Http\Controllers\ApprenantController::class, "store"])->name("apprenant.store");
Route::get("/editer_app/{apprenant}" , [App\Http\Controllers\ApprenantController::class, "edit"])->name("apprenant.edit");
Route::put("/editerapp_tritement/{apprenant}" , [App\Http\Controllers\ApprenantController::class, "update"])->name("apprenant.update");
Route::get('/detail_app/{apprenant}',[App\Http\Controllers\ApprenantController::class,"show"])->name("apprenant.show");
Route::get("/supprimer_app/{apprenant}",[App\Http\Controllers\ApprenantController::class, "destroy"])->name("apprenant.destroy");



// niveau d'etude
Route::get('/niv_etude',[NiveauController::class, "index"]);
Route::get('/ajouter',[App\Http\Controllers\NiveauController:: class, "create"]);
Route::post('/ajounivetude_traitement',[App\Http\Controllers\NiveauController::class, "store"])->name("niveau.store");
Route::get("/editer_nivetude/{niveau}" , [App\Http\Controllers\NiveauController::class, "edit"])->name("niveau.edit");
Route::put("/editniv_tritement/{niveau}" , [App\Http\Controllers\NiveauController::class, "update"])->name("nivetude.update");
Route::get('/detail_niv/{niveau}',[App\Http\Controllers\NiveauController::class,"show"])->name("niveau.show");
Route::get("/supprimer_niv/{niveau}",[App\Http\Controllers\NiveauController::class, "destroy"])->name("niveau.destroy");

// pour les modules
Route::get('/module',[ModuleController::class, "index"]);
Route::get('/ajouter_module',[ModuleController:: class, "create"]);
Route::post('/ajoumodule_traitement',[ModuleController::class, "store"])->name("module.store");
Route::get("/editer_module/{module}" , [ModuleController::class, "edit"])->name("module.edit");
Route::put("/editmodule_tritement/{module}" , [ModuleController::class, "update"])->name("module.update");
Route::get('/detail_module/{module}',[ModuleController::class,"show"])->name("module.show");
Route::get("/supprimer_module/{module}",[ModuleController::class, "destroy"])->name("module.destroy");


// payment


Route::get('/payment',[PaymentController::class,"index"]);
Route::get('/ajouter_payment',[PaymentController::class,"create"]);
Route::post('/ajouter_pay_traitement',[ App\Http\Controllers\PaymentController::class, "store"])->name('payment.store');



