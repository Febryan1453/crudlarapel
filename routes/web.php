<?php

use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(StudentController::class)->group(function(){
    Route::get('/students', 'index')->name('student.index');
    Route::get('/students/create', 'create')->name('student.create');
    Route::post('/students/create/save', 'store')->name('student.store');
    Route::get('/students/detail/{id}', 'show')->name('student.show');
    Route::get('/students/delete/{id}', 'destroy')->name('student.destroy');
    Route::get('/students/edit/{id}', 'edit')->name('student.edit');
    Route::put('/students/update/{id}', 'update')->name('student.update');
});
