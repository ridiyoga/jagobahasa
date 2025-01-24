<?php

use App\Http\Controllers\CoursesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
// courses
Route::get('/courses', [CoursesController::class, 'listcourses'])->name('listcourses');
Route::post('/courses/coursespost', [CoursesController::class, 'coursespost'])->name('courses.coursespost');
Route::post('/courses/coursesupdate', [CoursesController::class, 'coursesupdate'])->name('courses.coursesupdate');
Route::post('/courses/coursesdelete', [CoursesController::class, 'coursesdelete'])->name('courses.coursesdelete');
// end course
