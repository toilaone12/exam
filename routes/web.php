<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\LevelController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class, 'home'])->name('page.home');
Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::prefix('lesson')->group(function(){
        Route::get('/',[LessonController::class, 'list'])->name('lesson.list');
        Route::post('/add',[LessonController::class, 'add'])->name('lesson.add');
        Route::get('/update',[LessonController::class, 'update'])->name('lesson.update');
        Route::post('/change',[LessonController::class, 'change'])->name('lesson.change');
        Route::post('/delete',[LessonController::class, 'delete'])->name('lesson.delete');
    });
    Route::prefix('level')->group(function(){
        Route::get('/',[LevelController::class, 'list'])->name('level.list');
        Route::post('/add',[LevelController::class, 'add'])->name('level.add');
        Route::get('/update',[LevelController::class, 'update'])->name('level.update');
        Route::post('/change',[LevelController::class, 'change'])->name('level.change');
        Route::post('/delete',[LevelController::class, 'delete'])->name('level.delete');
    });
    Route::prefix('exam')->group(function(){
        Route::get('/',[ExamController::class, 'list'])->name('exam.list');
        Route::post('/add',[ExamController::class, 'add'])->name('exam.add');
        Route::get('/update',[ExamController::class, 'update'])->name('exam.update');
        Route::post('/change',[ExamController::class, 'change'])->name('exam.change');
        Route::post('/delete',[ExamController::class, 'delete'])->name('exam.delete');
    });
});
// Route::get('/admin', function () {
//     return view('dashboard');
// });
