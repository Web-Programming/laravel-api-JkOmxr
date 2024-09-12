<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/menu', function(Request $request){
    return response()->json(['Home', 'Profile', 'About', 'Contact Us']);
});

//buat route menuju url /donatur
//buat respone berupa data json seperti berikut
/*
[
    {
    'id':1,
    'nama': 'Kevin Kristian'
    },
    {
    'id':2,
    'nama': 'Valencio Arjun'
    },
    {
    'id':3,
    'nama': 'Felix'
    },
]
*/

Route::get('/donatur', function(Request $request){
    return response()->json(
    [

        ['id'=> 1, 'nama'=> 'Donatur 1'],
        ['id'=> 2, 'nama'=> 'Donatur 2'],
        ['id'=> 3, 'nama'=> 'Donatur 3'],

    ]);
});