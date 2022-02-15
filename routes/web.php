<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/get', function () {
    return view('welcome');
});

Route::get('/posts',function(){
$posts=[

[
"id"=>1,
"name"=>"Hemmat",
"body"=>"hi ya Hemmat",
"title"=>"title el pos",
]
,

[
 "id"=>2,
"name"=>"NOur",
"body"=>"hi ya NOur",
"title"=>"title el pos",
]
,
[
 "id"=>3,
"name"=>"Haidy",
"body"=>"hi ya Haidy",
"title"=>"title el pos",
]


];
return view("posts.index",["posts"=>$posts]);
});


Route::get('/show/{id}', function ($id) {

    $post=[
 
"id"=>$id,
"name"=>"Dina",
"body"=>"hi ya Dina",
"title"=>"title el pos",
    ];
    return view('posts.show',$post);
})->where('id', '[0-9]+');


Route::get('/edit/{id}', function ($id) {

    $post=[
 
"id"=>$id,
"name"=>"Hemmat",
"body"=>"hi ya Hemmat",
"title"=>"title el pos",
    ];
    return view('posts.edit',$post);
})->where('id', '[0-9]+');


Route::post('/update',function(){
 
return "Done";
});

Route::get('/create',function(){
return view('posts.create');
});

Route::post('/store',function(){
 
return "stored";
});