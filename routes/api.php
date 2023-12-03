<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\StageController;
use App\Http\Controllers\ExamTypeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('student', [StudentController::class,'store']);
Route::resource('user', UserController::class);
// Route::resource('student', StudentController::class);
Route::resource('stage', StageController::class);
Route::resource('subject', SubjectController::class);
Route::resource('city', CityController::class);
Route::resource('grade', GradeController::class);
Route::resource('gender', GenderController::class);
Route::resource('exam_type', ExamTypeController::class);