<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\StudentController;
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

Route::controller(StudentController::class)->group(function(){
Route::get('/', "show");
Route::get('/insert', "show_form");
Route::post('/insert', "submit_form");
Route::get('/delete/{id}',"del");
Route::get('/edit/{id}',"show_edit_form");
Route::put('/edit_form/{id}',"edit_form");
});
// Route::get('/', [StudentController::class,"show"]);
// Route::get('/insert', [StudentController::class,"show_form"]);
// Route::post('/insert', [StudentController::class,"submit_form"]);
// Route::get('/delete/{id}',[StudentController::class,"del"]);

