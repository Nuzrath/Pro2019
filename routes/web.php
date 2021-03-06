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


Route::resource('/course', 'CourseController');

Route::resource('/classroom', 'RoomController');

Route::resource('/staff', 'StaffController');

//Staff_Subject many to many DB access using TeacherController
// Route::resource('/teacher','TeacherController');


Route::resource('/student', 'StudentController');

Route::resource('/subject', 'SubjectController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin','AdminController@index');

// Route::get('/user/{$id)/role', function($id){
//     return User::find($id)->Role;
// });


Route::get('/read', function(){

    $staff = App\Staff::find(1);

    foreach ($staff->students as $student) {
        echo $student->pivot->created_at;
    }

});
