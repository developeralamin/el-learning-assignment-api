<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\LessonController;




Route::get('/', function () {
    return view('welcome');
});


// Route::get('/dashboard',[HomeController::class,'index']);

Route::get('/dashboard',[AdminController::class,'index']);


Route::prefix('category')->group(function(){

   Route::get('/category',[CategoryController::class,'index'])->name('category');
   Route::get('/create',[CategoryController::class,'create'])->name('category_create');
   Route::post('/store',[CategoryController::class,'store'])->name('category_store');
   Route::get('/delete/{id}',[CategoryController::class,'Delete'])->name('category_delete');

});



Route::prefix('course')->group(function(){
   Route::get('/course',[CoursesController::class,'index'])->name('course');
   Route::get('/create',[CoursesController::class,'create'])->name('create');
   Route::post('/store',[CoursesController::class,'store'])->name('store');
   Route::get('/edit/{id}',[CoursesController::class,'Edit'])->name('edit');
   Route::post('/update/{id}',[CoursesController::class,'Update'])->name('update');
   Route::get('/delete/{id}',[CoursesController::class,'Delete'])->name('delete');
   Route::get('/show/{id}',[CoursesController::class,'show'])->name('show');

});


Route::prefix('lesson')->group(function(){
   Route::get('/lesson',[LessonController::class,'index'])->name('lesson');
   Route::get('/create',[LessonController::class,'create'])->name('lesson_create');
   Route::post('/store',[LessonController::class,'store'])->name('lesson_store');
   Route::get('/edit/{id}',[LessonController::class,'Edit'])->name('lesson_edit');
   Route::post('/update/{id}',[LessonController::class,'Update'])->name('lesson_update');
   Route::get('/delete/{id}',[LessonController::class,'Delete'])->name('lesson_delete');
   Route::get('/show/{id}',[LessonController::class,'show'])->name('lesson_show');

});

