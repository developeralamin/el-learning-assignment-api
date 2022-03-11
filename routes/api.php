<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LessonController;

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


Route::get('/course',[CoursesController::class,'test']);
Route::post('/course',[CoursesController::class,'insert']);


// category api section
Route::get('/category',[CategoryController::class,'test']);
Route::post('/category',[CategoryController::class,'insert']);

// lesson api section
Route::get('/lesson',[LessonController::class,'test']);
Route::post('/lesson',[LessonController::class,'insert']);




// Route::get('/hello',function(){
//   return 'Hello viewrs';
// });
