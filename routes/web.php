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

Route::get('/', fuction () {
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
