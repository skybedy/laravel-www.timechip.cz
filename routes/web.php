<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RaceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ResultsController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\TestController;


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


Route::get('/', HomeController::class)->name('index');

Route::get('zavody/{raceYear}', [RaceController::class, 'index'])->name('race');

Route::get('vysledky/{raceYear}', [ResultsController::class, 'index']);
//Route::get('vysledky/{raceYear}/{raceId}', [ResultsController::class, 'show']);


Route::get('registrace/{raceYear}/{raceId}/success', [RegistrationController::class, 'success'])->name('registration_success');

Route::get('registrace/{raceName}/seznam-prihlasek/{raceYear}/{raceId}', [RegistrationController::class, 'index'])->name('registration_list');
Route::get('registrace/{raceName}/{raceYear}/{raceId}/{eventOrder?}', [RegistrationController::class, 'create'])->name('registration');

Route::post('registrace/{raceYear}/{raceId}/{eventOrder?}', [RegistrationController::class, 'store'])->name('registration_post');


Route::get('contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('contac', [ContactController::class, 'send'])->name('contact.send');

Route::get('test/{year}', TestController::class);
