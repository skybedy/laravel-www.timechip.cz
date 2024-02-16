<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegistrationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('start-number-check', [RegistrationController::class, 'startNumberCheck'])->name('start_number_check');

Route::get('start-number-choice-endurocc/{category_id}', [RegistrationController::class, 'startNumberChoiceEnduroCC'])->name('start_number_choice_endurocc');
