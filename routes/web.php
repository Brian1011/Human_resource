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

use App\department;

Route::get('/', function () {
    return view('login');
});

//login the user
Route::post('/login','EmployeeController@login');

//go to homepage
Route::get('/home',function (){
    $departments = department::all();
    return view('home',['departments'=>$departments]);
});

//show user profile
Route::get('/profile', function () {
    return view('myprofile');
});

//add department
Route::get('/add/department',function (){
    return view('add_department');
});

//Store the departments in the database
Route::post('/add/department','DepartmentController@store');

//see a particular department
Route::get('/department/edit/{id}','DepartmentController@findDepartment');

//list of employees
Route::get('/department/employee/{id}','EmployeeController@departmentEmployees');














