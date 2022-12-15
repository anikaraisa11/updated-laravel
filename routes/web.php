<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/2',function()
// {
//     return view('welcome1');
// });


Route::get('/', function()
{
   return View::make('pages.welcome');
});
Route::get('/create', function()
{
   return View::make('pages.create_meeting');
});
Route::get('/login',function()
{
    return view('pages.login');
});
