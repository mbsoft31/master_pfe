<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// admin routes

Route::middleware(['auth:sanctum', 'verified'])->group( function () {

    Route::get('/admin/faculty', \App\View\Faculty\Index::class)->name('admin.faculty.index');
    Route::get('/admin/departement', \App\View\Departement\Index::class)->name('admin.departement.index');
    Route::get('/admin/speciality', \App\View\Speciality\Index::class)->name('admin.speciality.index');
    Route::get('/admin/subject', \App\View\Subject\Index::class)->name('admin.subject.index');
    Route::get('/admin/teacher', \App\View\Teacher\Index::class)->name('admin.teacher.index');

});

// Route::group(['middleware' => 'auth'], function () {
// if (Auth::check()) {
// if (Auth::user()->role == "super") {
//    Route::get('super', function () {
//     return view('test.super');
//    });
// }
// elseif (Auth::user()->role == "admin") {
//     Route::get('admin', function () {
//      return view('test.admin');
//     });
//  }

//  elseif (Auth::user()->role == "teacher") {
//     Route::get('teacher', function () {
//      return view('test.teacher');
//     });
//  }
//  elseif (Auth::user()->role == "student") {
//     Route::get('student', function () {
//      return view('test.student');
//     });
//  }
// }
// });

