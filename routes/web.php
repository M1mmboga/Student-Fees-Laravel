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

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/fees', function () {
    return view('MiriamMmboga.fees');
});

Route::get('/student', function () {
    return view('MiriamMmboga.student');
});

Route::post('storeStudent','StudentsController@store');

Route::post('storeFees','FeesController@store');

Route::get('view-students','StudentsController@index');

Route::get('view-fees','FeesController@index');


Route::get('/search','FeesController@search');
// Route::get('MiriamMmboga.viewfees', function()
// {
//     return App\Student::find($id)->fees;
// });

// Route::resource('fees','FeesController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
