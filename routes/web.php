<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\RoutineController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\TeachersController;





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

Route::get('/', function () {
    return view('index');
});

Route::get('/adminlogin', [AdminController::class, 'adminlogin']);
Route::post('/adminlogin', [AdminController::class, 'authenticate']);
Route::get('/dashboard', [AdminController::class, 'adminpage'])->middleware(['checkadmin']);
Route::get('/logout',  [LogoutController::class, 'perform'])->middleware(['checkadmin']);

Route::get('/student', [StudentController::class, 'register'])->middleware('checkadmin');
Route::post('/student',[StudentController::class, 'store']);
Route::get('/studentdetail', [StudentController::class, 'view'])->middleware('checkadmin');
Route::get('/student/delete/{id}', [StudentController::class, 'delete']);
Route::get('/student/edit/{id}', [StudentController::class, 'editdata'])->middleware('checkadmin');
Route::post('studentedit', [StudentController::class, 'update']);

Route::get('/teacher', [TeacherController::class, 'register'])->middleware('checkadmin');
Route::post('/teacher',[TeacherController::class, 'store']);
Route::get('/teacherdetail', [TeacherController::class, 'view'])->middleware('checkadmin');
Route::get('/teacher/delete/{id}', [TeacherController::class, 'delete']);
Route::get('/teacher/edit/{id}', [TeacherController::class, 'editdata'])->middleware('checkadmin');
Route::post('teacheredit', [TeacherController::class, 'update']);

Route::get('/class', [ClassController::class, 'register'])->middleware('checkadmin');
Route::post('/class',[ClassController::class, 'store']);
Route::get('/classdetail', [ClassController::class, 'view'])->middleware('checkadmin');
Route::get('/class/delete/{id}', [ClassController::class, 'delete']);
Route::get('/class/edit/{id}', [ClassController::class, 'editdata'])->middleware('checkadmin');
Route::post('classedit', [ClassController::class, 'update']);

Route::get('/routine', [RoutineController::class, 'register'])->middleware('checkadmin');
Route::post('/routine',[RoutineController::class, 'store']);
Route::get('/routinedetail', [RoutineController::class, 'view'])->middleware('checkadmin');
Route::get('/routine/delete/{id}', [RoutineController::class, 'delete']);
Route::get('/routine/edit/{id}', [RoutineController::class, 'editdata'])->middleware('checkadmin');
Route::post('routineedit', [RoutineController::class, 'update']);

Route::get('/teacherlogin', [TeachersController::class, 'teacherlogin']);
Route::post('/teacherlogin', [TeachersController::class, 'authenticate']);
Route::get('/teacherdashboard', [TeachersController::class, 'teacherpage'])->middleware('checkteacher');
Route::get('/profile', [TeachersController::class, 'viewprofile'])->middleware('checkteacher');
Route::get('/routinelist', [TeachersController::class, 'viewroutine'])->middleware('checkteacher');
Route::get('/updateprofile', [TeachersController::class, 'editprofile']);
Route::post('/profileupdate', [TeachersController::class, 'update']);
Route::get('/teacherlogout',  [LogoutController::class, 'teacherlogout']);

