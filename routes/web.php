<?php

use App\User;
use App\Role;
use App\Subject;
use App\Staff;

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

// {{--  Route::resource('/contact', 'ContactController');}}

Route::resource('/contact', 'ContactController');


Route::resource('/staff', 'StaffController');


Route::resource('/subject', 'SubjectController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin','AdminController@index');

// Route::get('/user/{$id)/role', function($id){
//     return User::find($id)->Role;
// });


Route::get('/staff/{staff}/subject', function($id){

    $staff = Staff::find($id);

    foreach ($staff->subjects as $subject) {

        echo $subject->name ."<br/>";
    }

});
