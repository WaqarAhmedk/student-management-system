<?php

use Illuminate\Support\Facades\Route;

Route::get('home', 'ViewController@home')->name('view.home');
Route::get('/home/view','ViewController@viewdata')->name('student.view');

Route::get('/home/{id}/edit' , 'ViewController@edit')->name('student.edit');
Route::patch('/home/{id}/update', 'RegisterStudentController@update')->name('student.update');


Route::get('/home/registrationform', 'RegisterStudentController@registerform')->name('student.registerform');
Route::post('/home/registerstudent', 'RegisterStudentController@registerstudent')->name('student.registerstudent');


Route::delete('/home/view/{id}delete','RegisterStudentController@delete')->name('student.delete');

Route::get('/home/view/search' , 'RegisterStudentController@searchform')->name('student.searchform');
Route::post('/home/view/search' ,'RegisterStudentController@search')->name('student.search');
