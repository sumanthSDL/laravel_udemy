<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('home');
});
Route::get('update',[StudentController::class, 'update']);

Route::get('add',[StudentController::class, 'add']);

Route::get('delete',[StudentController::class, 'delete']);

Route::get('students/all', [StudentController::class,'show_all_students']);

// Route::get('student/show',[StudentController::class,'show']);

// Route::get('single-student/{id}',[StudentController::class,'show_single']);

// Route::get('update',[StudentController::class,'update']);

// Route::get('delete',[StudentController::class, 'delete']);

// Route::get('join', [StudentController::class, 'join']);