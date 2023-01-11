<?php

use App\Http\Controllers\FormController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/forms', [FormController::class, 'index'])->name('forms.index');

Route::get('/forms/create-step-one', [FormController::class, 'createStepOne'])->name('forms.create.step.one');

Route::get('/forms/create-step-one', [FormController::class, 'postCreateStepOne'])->name('forms.create.step.one.post');

Route::get('/forms/create-step-two', [FormController::class, 'createStepTwo'])->name('forms.create.step.two');

Route::get('/forms/create-step-two', [FormController::class, 'postCreateStepTwo'])->name('forms.create.step.two.post');

Route::get('/forms/create-step-three', [FormController::class, 'createStepThree'])->name('forms.create.step.three');

Route::get('/forms/create-step-three', [FormController::class, 'postCreateStepThree'])->name('forms.create.step.three.post');