<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ZavodyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ResultsController;
use App\Http\Controllers\RegistrationController;


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

Route::get('zavody/{raceYear}', [ZavodyController::class, 'index']);
Route::get('vysledky/{raceYear}', [ResultsController::class, 'index']);
Route::get('vysledky/{raceYear}/{raceId}', [ResultsController::class, 'show']);

Route::get('registrace/{raceYear}/{raceId}', [RegistrationController::class, 'index'])->name('registration');


Route::get('contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('contac', [ContactController::class, 'send'])->name('contact.send');
