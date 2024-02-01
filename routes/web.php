<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

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

Route::group(['middleware' => 'loginAuth'], function () {
    Route::get('student-listing', [RegistrationController::class, 'studentListing']);


    Route::get('student-form',[RegistrationController::class,'studentForm']);
    Route::post('student-form-submit',[RegistrationController::class, 'studentFormSubmit']);
    
    //Route::get('student-listing', [RegistrationController::class, 'studentListing']);
    Route::get('studentlist-edit/{id}',[RegistrationController::class,'studentListEdit']);
    Route::get('studentlist-delete/{id}',[RegistrationController::class,'studentListDelete']);
    Route::post('studentlist-update',[RegistrationController::class,'studentListUpdate']);

});

Route::post('login-details-submit',[RegistrationController::class,'loginDetailsSubmit']);
Route::post('logout',[RegistrationController::class,'logoutForm']);

Route::get('/',[RegistrationController::class,'loginDetails']);
