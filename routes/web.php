<?php

use Illuminate\Support\Facades\Route;

/**
 * student route
 */
Route::group(['namespace'=>'App\Http\Controllers','prefix'=>'student'],function(){
   Route::get('/','StudentController@index')->name('student.index');
   Route::get('/create','StudentController@create')->name('student.create');
   Route::post('/store','StudentController@store')->name('student.store');
   Route::get('/show/{id}','StudentController@show')->name('student.show');
   Route::get('/delete/{id}','StudentController@delete')->name('student.delete');

});

/**
 * staff route
 */
Route::group(['namespace'=>'App\Http\Controllers','prefix'=>'staff'],function(){

    Route::get('/','StaffController@index')->name('staff.index');
    Route::get('/create','StaffController@create')->name('staff.create');
    Route::post('/store','StaffController@store')->name('staff.store');
    Route::get('/show/{id}','StaffController@show')->name('staff.show');
    Route::get('/delete/{id}','StaffController@delete')->name('staff.delete');

});

/**
 * teacher route
 */

Route::group(['namespace'=>'App\Http\Controllers','prefix' => 'teacher' ],function(){
    Route::get('/','TeacherController@index')->name('teacher.index');
    Route::get('/create','TeacherController@create')->name('teacher.create');
    Route::post('/store','TeacherController@store')->name('teacher.store');
    Route::get('/show/{id}','TeacherController@show')->name('teacher.show');
    Route::get('/delete/{id}','TeacherController@delete')->name('teacher.delete');
});













