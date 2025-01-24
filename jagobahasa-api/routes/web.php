<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\MaterialsController;
use App\Http\Controllers\UserController;
use App\Models\Courses;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
// Login
Route::post('/login', [UserController::class, 'login'])->name('user.login');
// end login
// Route::group(['middleware' => ['auth']], function () {
// user
Route::get('/user', [UserController::class, 'listuser'])->name('listuser');
Route::post('/user/userpost', [UserController::class, 'userpost'])->name('user.userpost');
Route::post('/user/userupdate', [UserController::class, 'userupdate'])->name('user.userupdate');
Route::post('/user/userdelete', [UserController::class, 'userdelete'])->name('user.userdelete');
// end user
// courses
Route::get('/courses', [CoursesController::class, 'listcourses'])->name('listcourses');
Route::post('/courses/coursespost', [CoursesController::class, 'coursespost'])->name('courses.coursespost');
Route::post('/courses/coursesupdate', [CoursesController::class, 'coursesupdate'])->name('courses.coursesupdate');
Route::post('/courses/coursesdelete', [CoursesController::class, 'coursesdelete'])->name('courses.coursesdelete');
// end courses
// materials
Route::get('/materials', [MaterialsController::class, 'listmaterials'])->name('listmaterials');
Route::post('/materials/materialspost', [MaterialsController::class, 'materialspost'])->name('materials.materialspost');
Route::post('/materials/materialsupdate', [MaterialsController::class, 'materialsupdate'])->name('materials.materialsupdate');
Route::post('/materials/materialsdelete', [MaterialsController::class, 'materialsdelete'])->name('materials.materialsdelete');
    // end materials
// });
