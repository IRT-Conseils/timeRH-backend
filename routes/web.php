<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EDocumentController;
use App\Http\Controllers\EntriesAndValidationsController;
use App\Http\Controllers\MedicalCheckUpController;
use App\Http\Controllers\MyCollaboratorsController;
use App\Http\Controllers\MyRequestsController;
use App\Http\Controllers\TemporaryWorkersController;
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

// Login page
Route::get('/', function () {
    return '<h1>Login page</h1>';
})->name('home.index');

Route::prefix('/rh')->name('rh.')->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

// My requests
    Route::get('/my-requests', [MyRequestsController::class, 'myRequests'])->name('my-requests');

// My collaborators
    Route::get('/my-collaborators', [MyCollaboratorsController::class, 'myCollaborators'])->name('my-collaborators');

// Entries and validations
    Route::get('/entries-and-validations', [EntriesAndValidationsController::class, 'entriesAndValidations'])->name('entries-and-validations');

// Temporary workers
    Route::get('/temporary-workers', [TemporaryWorkersController::class, 'temporaryWorkers'])->name('temporary-workers');

// Medical check-up
    Route::get('/medical-check-up', [MedicalCheckUpController::class, 'medicalCheckUp'])->name('medical-check-up');

// E-document
    Route::get('/e-document', [EDocumentController::class, 'eDocument'])->name('e-document');
});



