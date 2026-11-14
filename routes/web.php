<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $name='osama';
    $departments = [
        '1' => 'tichnical',
        '2' => 'financhial',
        '3' => 'sales',
    ];
    // return view('about')->with('name',$name);
    // return view('about' , ['name' => $name]);
    return view('about' , compact ('name' , 'departments'));
});

Route::post('/about', function () {
    $name = $_POST['name'];
    $departments = [
        '1' => 'tichnical',
        '2' => 'financhial',
        '3' => 'sales',
    ];

    return view('about' , compact('name'));
});

Route::get('tasks', function () {
    return view('tasks');
});

Route::post('create', function () {
    $task_name = $_POST['name'];
    DB::table('tasks')->insert(['name'=> $task_name ]);
    return view('tasks');
});
