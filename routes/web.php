<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/patient', [PatientController::class, 'index'])->name('patient.index');
Route::get('/patient/create', [PatientController::class, 'create'])->name('patient.create');
Route::post('/patient', [PatientController::class, 'store'])->name('patient.store');
Route::get('/patient/{patient}/edit', [PatientController::class, 'edit'])->name('patient.edit');
Route::put('/patient/{patient}pdate', [PatientController::class, 'update'])->name('patient.update');
Route::delete('/patient/{patient}/destroy', [PatientController::class, 'destroy'])->name('patient.destroy');