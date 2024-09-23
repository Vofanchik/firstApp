<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GroupController;
use App\Http\Controllers\DefenderController;
use App\Http\Controllers\StudentController;

use App\Http\Controllers;
use Illuminate\Auth\Middleware\Authenticate;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/groups/students', [StudentController::class, 'index'])->name('student.index'); 
Route::get('/groups', [GroupController::class, 'index'])->name('group.index'); ;
Route::get('/groups/create', [GroupController::class, 'create'])->name('group.create');
Route::post('/groups', [GroupController::class, 'store'])->name('group.store');
Route::get('/groups/{id}', [GroupController::class, 'show'])->name('group.show'); 
Route::get('/groups/{group}/edit', [GroupController::class, 'edit'])->name('group.edit')->middleware('auth');
Route::post('/groups/{group}', [GroupController::class, 'update'])->name('group.update');
Route::get('/groups/{group}/students/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/groups/{group}/students', [StudentController::class, 'store'])->name('student.store');
Route::get('/groups/{group}/students/{student}', [StudentController::class, 'show'])->name('student.show');
Route::get('/groups/{group}/students/{student}/edit', [StudentController::class, 'edit'])->name('student.edit')->middleware('auth');
Route::post('/groups/{group}/students/{student}', [StudentController::class, 'update'])->name('student.update');
Route::get('/whoiam', [DefenderController::class, 'index'])->name('defender')->middleware('auth'); 


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
