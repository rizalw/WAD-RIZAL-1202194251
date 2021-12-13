<?php

use App\Http\Controllers\patientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VaccineController;

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
Route::get('/', [VaccineController::class, 'about'])->name('about');
Route::get('/vaccine', [VaccineController::class, 'index'])->name('index');
Route::get('/insertVac', [VaccineController::class, 'insertVaccine'])->name('insertVaccine');
Route::post('/insertVaccine', [VaccineController::class, 'uploadVaccine'])->name('uploadVaccine');
Route::get('/updateVaccine/{id}', [VaccineController::class, 'updateVaccine'])->name('updateVaccine');
Route::post('/updateVaccine/{id}', [VaccineController::class, 'syncVaccine'])->name('syncVaccine');
Route::get('/deleteVaccine/{id}', [VaccineController::class, 'deleteVaccine'])->name('deleteVaccine');
Route::get('/patient', [patientController::class, 'index'])->name('indexPatient');
Route::get('/pickVaccine', [patientController::class, 'pickVaccine'])->name('pickVaccine');
Route::get('/insertPatient/{id}', [patientController::class, 'insertPatient'])->name('insertPatient');
Route::post('/uploadPatient', [patientController::class, 'uploadPatient'])->name('uploadPatient');
Route::get('/updatePatient/{id}', [patientController::class, 'updatePatient'])->name('updatePatient');
Route::post('/syncPatient/{id}', [patientController::class, 'syncPatient'])->name('syncPatient');
Route::get('/deletePatient/{id}', [patientController::class, 'deletePatient'])->name('deletePatient');