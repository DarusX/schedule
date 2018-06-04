<?php

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

Route::resources([
    'course' => 'CourseController',
    'professor' => 'ProfessorController',
    'language' => 'LanguageController',
    'hour' => 'HourController',
    'classroom' => 'ClassroomController',
    'period' => 'PeriodController'
]);
Route::prefix('table')->group(function(){
    Route::get('professor/search', 'ProfessorController@search')->name('professor.search');
    Route::get('professor/{id}/courses', 'ProfessorController@courses')->name('professor.courses');
    Route::get('professor/{id}/history', 'ProfessorController@history')->name('professor.history');
    Route::get('hour/{id}/courses', 'HourController@courses')->name('hour.courses');
    Route::get('language/{id}/courses', 'LanguageController@courses')->name('language.courses');
    Route::get('classroom/{id}/courses', 'ClassroomController@courses')->name('classroom.courses');
});
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
