<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello-world',function() {
//     return 'hello world';
// });

Route::get('/hello-world' ,fn() => view(view:'hello_world'));
Route::get('/hello', fn() => view('hello',[
    'name' => '山田太郎',
    'course' => 'Laravel',
]));
Route::get('/',fn() => view(view:'index'));
Route::get('/curriculum',fn() => view(view:'curriculum'));