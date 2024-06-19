<?php

use App\Http\Controllers\TodosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//i lesson start
Route::get('/todos', TodosController::class );



//ii practice start
Route::get('/todos1', Todos1Controller::class );


//iii  mainly yourself practice start
//controller name cant put !@#$
Route::get('/todos!', Todos2Controller::class );
