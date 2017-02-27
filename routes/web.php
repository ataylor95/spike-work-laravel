<?php
use App\Task;

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
    $name = "wayy";
    //return view('welcome', [
    //    'name' => 'boo'
    //]);
    
    //return view('welcome')->with('name', 'tay');
    
    return view('welcome', compact('name'));
});

Route::get('/about', function () {
    $names = ["woo", "boo", "coo"];
    return view('about')->with('names', $names);
});

Route::get('/tasks', function () {
    //$tasks = DB::Table('tasks')->latest()->get();
    //return $tasks; //returning it as json
    $tasks = Task::all();
    return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{id}', function ($id) {
    //$task = DB::Table('tasks')->find($id);
    $task = Task::find($id);
    return view('tasks.show', compact('task'));
});

Auth::routes();

Route::get('/home', 'HomeController@index');
