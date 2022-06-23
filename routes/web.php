<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\HoraGrupoController;

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
    return view('Template.template');
});

Route::resource('teachers', TeacherController::class);

Route::resource('subjects', SubjectController::class);

Route::resource('groups', GroupController::class);

Route::resource('Classroom', ClassroomController::class);

Route::resource('hora_grupo',HoraGrupoController::class);


// Route::get('almacenar',function(){
//     return view('Teacher.create');
// });

// Route::get('/Create_Teachers', [UserController::class,'index']);

