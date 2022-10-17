<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

Route::get('/', [StudentController::class,'get_all_student']);

Route::get('edit/{id}',[StudentController::class,'get_student_by_id']);

Route::post('edit/student',[StudentController::class,'update']);

Route::get('create', function(){
    return view('create');
});

Route::post('create/store',[StudentController::class,'add']);

Route::get('delete/{id}',[StudentController::class,'delete']);


