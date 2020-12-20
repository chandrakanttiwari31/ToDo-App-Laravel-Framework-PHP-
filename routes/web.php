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
    return view('welcome');
});


Route::view('login','login');
Route::post('loginsubmit','ToDoController@loginsubmit');


// Route::get('/logout', function () {
//     session()->forget('name');
//     session()->flash('error','Logout Successfully');
//     return redirect('login');
// });

Route::group(['middleware'=>['todoAuth']],function(){
    Route::get('todo_show','ToDoController@show');
    Route::get('todo_delete/{id}','ToDoController@destroy');
    Route::get('todo_create','ToDoController@create');
    Route::post('todo_submit','ToDoController@store');
    Route::get('todo_edit/{id}','ToDoController@edit');
    Route::post('todo_update/{id}','ToDoController@update')->name('todo.update');

});
Route::get('tologout','ToDoController@tologout');



